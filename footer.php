</div> <!-- container -->

<!-- Beautiful Modern Footer -->
<footer class="modern-footer mt-5">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <!-- Brand Section -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-brand">
                        <h5 class="brand-name">
                            <i class="bi bi-calendar-event me-2"></i>EventSysTem
                        </h5>
                        <p class="brand-description">
                            Your ultimate solution for seamless event management. Create, organize, and manage events with ease and style.
                        </p>
                        <div class="social-links">
                            <a href="#" class="social-link" title="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="social-link" title="Twitter">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#" class="social-link" title="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#" class="social-link" title="LinkedIn">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-links">
                        <h6 class="links-title">Quick Links</h6>
                        <ul class="links-list">
                            <li><a href="index.php">Home</a></li>
                            <?php if (isset($_SESSION['user_id'])): ?>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="events.php">My Events</a></li>
                                <li><a href="profile.php">Profile</a></li>
                            <?php else: ?>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <!-- Features -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-links">
                        <h6 class="links-title">Features</h6>
                        <ul class="links-list">
                            <li><a href="#" onclick="alert('Coming Soon!')">Create Events</a></li>
                            <li><a href="#" onclick="alert('Coming Soon!')">Manage Guests</a></li>
                            <li><a href="#" onclick="alert('Coming Soon!')">Analytics</a></li>
                            <li><a href="#" onclick="alert('Coming Soon!')">Notifications</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Support -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-links">
                        <h6 class="links-title">Support</h6>
                        <ul class="links-list">
                            <li><a href="#" onclick="alert('Help Center - Coming Soon!')">Help Center</a></li>
                            <li><a href="#" onclick="alert('Contact Us - Coming Soon!')">Contact Us</a></li>
                            <li><a href="#" onclick="alert('Privacy Policy - Coming Soon!')">Privacy Policy</a></li>
                            <li><a href="#" onclick="alert('Terms of Service - Coming Soon!')">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-newsletter">
                        <h6 class="links-title">Stay Updated</h6>
                        <p class="newsletter-text">Get the latest updates and features.</p>
                        <form class="newsletter-form" onsubmit="alert('Newsletter signup - Coming Soon!'); return false;">
                            <div class="input-group">
                                <input type="email" class="form-control newsletter-input" placeholder="Enter email" required>
                                <button class="btn newsletter-btn" type="submit">
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="copyright-text">
                        &copy; <?php echo date('Y'); ?> EventSysTem. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="made-with-love">
                        Made with <i class="bi bi-heart-fill text-danger"></i> for amazing events
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .modern-footer {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .modern-footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        pointer-events: none;
    }

    .footer-content {
        padding: 3rem 0 2rem;
        position: relative;
        z-index: 1;
    }

    .footer-brand .brand-name {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: white;
    }

    .footer-brand .brand-description {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .social-links {
        display: flex;
        gap: 1rem;
    }

    .social-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .social-link:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-3px);
        color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .links-title {
        color: white;
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.1rem;
    }

    .links-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .links-list li {
        margin-bottom: 0.5rem;
    }

    .links-list a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        position: relative;
    }

    .links-list a:hover {
        color: white;
        transform: translateX(5px);
    }

    .links-list a::before {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 1px;
        background: white;
        transition: width 0.3s ease;
    }

    .links-list a:hover::before {
        width: 100%;
    }

    .newsletter-text {
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }

    .newsletter-input {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 25px 0 0 25px;
        color: white;
        padding: 0.5rem 1rem;
    }

    .newsletter-input::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    .newsletter-input:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.5);
        box-shadow: none;
        color: white;
    }

    .newsletter-btn {
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 0 25px 25px 0;
        color: white;
        border-left: none;
        transition: all 0.3s ease;
    }

    .newsletter-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        color: white;
        transform: scale(1.05);
    }

    .footer-bottom {
        background: rgba(0, 0, 0, 0.2);
        padding: 1.5rem 0;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .copyright-text,
    .made-with-love {
        margin: 0;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
    }

    .made-with-love i {
        animation: heartbeat 2s infinite;
        display: inline-block;
    }

    @keyframes heartbeat {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    @media (max-width: 768px) {
        .footer-content {
            padding: 2rem 0 1rem;
            text-align: center;
        }

        .social-links {
            justify-content: center;
        }

        .made-with-love {
            text-align: center !important;
            margin-top: 1rem;
        }
    }
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>