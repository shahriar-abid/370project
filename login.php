<?php
session_start();
include 'config.php';
include 'header.php';

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT user_id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($user_id, $name, $hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0) {
        if (password_verify($password, $hashed_password)) {
            // Store session
            $_SESSION['user_id'] = $user_id;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "No account found with this email!";
    }
    $stmt->close();
}
?>

<style>
    .login-container {
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        padding: 0;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        max-width: 400px;
        width: 100%;
    }

    .login-header {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        padding: 2rem;
        text-align: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .login-header h2 {
        color: white;
        font-weight: 300;
        margin: 0;
        font-size: 1.8rem;
    }

    .login-header p {
        color: rgba(255, 255, 255, 0.8);
        margin: 0.5rem 0 0 0;
        font-size: 0.9rem;
    }

    .login-body {
        padding: 2rem;
        background: white;
    }

    .form-floating {
        margin-bottom: 1rem;
    }

    .form-floating input {
        border: 2px solid #f0f0f0;
        border-radius: 12px;
        padding: 1rem;
        transition: all 0.3s ease;
        background: #fafafa;
    }

    .form-floating input:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        background: white;
    }

    .form-floating label {
        color: #666;
        padding-left: 1rem;
    }

    .btn-login {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 12px;
        padding: 0.8rem 2rem;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        width: 100%;
    }

    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }

    .login-footer {
        text-align: center;
        padding: 1rem 2rem 2rem;
        background: white;
        border-top: 1px solid #f0f0f0;
    }

    .login-footer a {
        color: #667eea;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .login-footer a:hover {
        color: #764ba2;
    }

    .alert {
        border-radius: 12px;
        margin-bottom: 1rem;
    }

    @media (max-width: 576px) {
        .login-card {
            margin: 1rem;
            border-radius: 15px;
        }

        .login-header,
        .login-body {
            padding: 1.5rem;
        }
    }
</style>

<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <h2>Welcome Back</h2>
            <p>Please sign in to your EventSysTem account</p>
        </div>

        <div class="login-body">
            <?php if ($error): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="post" action="">
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    <label for="email">Email Address</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <button type="submit" class="btn btn-primary btn-login">
                    Login
                </button>
            </form>
        </div>

        <div class="login-footer">
            <p class="mb-0">
                Don't have an account? <a href="register.php">Sign up here</a>
            </p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>