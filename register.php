<?php
include 'config.php';
include 'header.php';

$success = $error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $hashed = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $check = $conn->prepare("SELECT user_id FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $error = "Email already registered!";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashed);

        if ($stmt->execute()) {
            $success = "Registration successful! <a href='login.php'>Login here</a>";
        } else {
            $error = "Something went wrong. Try again.";
        }
        $stmt->close();
    }
    $check->close();
}
?>

<style>
    .register-container {
        min-height: 75vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 0;
    }

    .register-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        padding: 0;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        max-width: 420px;
        width: 100%;
    }

    .register-header {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        padding: 2rem;
        text-align: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .register-header h2 {
        color: white;
        font-weight: 300;
        margin: 0;
        font-size: 1.8rem;
    }

    .register-header p {
        color: rgba(255, 255, 255, 0.8);
        margin: 0.5rem 0 0 0;
        font-size: 0.9rem;
    }

    .register-body {
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

    .btn-register {
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

    .btn-register:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }

    .register-footer {
        text-align: center;
        padding: 1rem 2rem 2rem;
        background: white;
        border-top: 1px solid #f0f0f0;
    }

    .register-footer a {
        color: #667eea;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .register-footer a:hover {
        color: #764ba2;
    }

    .alert {
        border-radius: 12px;
        margin-bottom: 1rem;
    }

    .alert a {
        color: inherit;
        text-decoration: underline;
        font-weight: 600;
    }

    .password-hint {
        font-size: 0.85rem;
        color: #666;
        margin-top: 0.5rem;
        padding: 0.75rem;
        background: #f8f9fa;
        border-radius: 8px;
        border-left: 4px solid #667eea;
    }

    @media (max-width: 576px) {
        .register-card {
            margin: 1rem;
            border-radius: 15px;
        }

        .register-header,
        .register-body {
            padding: 1.5rem;
        }

        .register-container {
            padding: 1rem 0;
        }
    }
</style>

<div class="register-container">
    <div class="register-card">
        <div class="register-header">
            <h2>Create Account</h2>
            <p>Join EventSysTem to manage your events</p>
        </div>

        <div class="register-body">
            <?php if ($error): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success; ?>
                </div>
            <?php endif; ?>

            <form method="post" action="">
                <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                    <label for="name">Full Name</label>
                </div>

                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    <label for="email">Email Address</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <div class="password-hint">
                    💡 <strong>Tip:</strong> Use a strong password with at least 8 characters, including letters, numbers, and symbols.
                </div>

                <button type="submit" class="btn btn-primary btn-register">
                    Create Account
                </button>
            </form>
        </div>

        <div class="register-footer">
            <p class="mb-0">
                Already have an account? <a href="login.php">Sign in here</a>
            </p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>