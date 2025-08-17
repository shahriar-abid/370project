<?php include 'header.php'; ?>

<style>
    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%),
            url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        color: white;
        padding: 5rem 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        animation: fadeInUp 1s ease-out;
    }

    .hero-content p {
        font-size: 1.25rem;
        margin-bottom: 2.5rem;
        opacity: 0.9;
        animation: fadeInUp 1s ease-out 0.2s both;
    }

    .hero-buttons {
        animation: fadeInUp 1s ease-out 0.4s both;
    }

    .btn-hero {
        padding: 1rem 2.5rem;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 50px;
        margin: 0 1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        border: 2px solid white;
    }

    .btn-hero-primary {
        background: white;
        color: #667eea;
        border-color: white;
    }

    .btn-hero-primary:hover {
        background: transparent;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .btn-hero-outline {
        background: transparent;
        color: white;
        border-color: white;
    }

    .btn-hero-outline:hover {
        background: white;
        color: #667eea;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    /* Features Section */
    .features-section {
        padding: 5rem 0;
        background: #f8f9fa;
    }

    .section-title {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 1rem;
    }

    .section-title p {
        font-size: 1.1rem;
        color: #666;
        max-width: 600px;
        margin: 0 auto;
    }

    .feature-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.1), transparent);
        transition: left 0.5s ease;
    }

    .feature-card:hover::before {
        left: 100%;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .feature-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea, #764ba2);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 2rem;
        color: white;
        position: relative;
        z-index: 1;
    }

    .feature-card h4 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #333;
        position: relative;
        z-index: 1;
    }

    .feature-card p {
        color: #666;
        line-height: 1.6;
        position: relative;
        z-index: 1;
    }

    .feature-status {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: #28a745;
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .feature-status.coming-soon {
        background: #ffc107;
        color: #333;
    }

    /* Stats Section */
    .stats-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 4rem 0;
    }

    .stat-item {
        text-align: center;
        margin-bottom: 2rem;
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 700;
        display: block;
        margin-bottom: 0.5rem;
    }

    .stat-label {
        font-size: 1.1rem;
        opacity: 0.9;
    }

    /* CTA Section */
    .cta-section {
        background: white;
        padding: 4rem 0;
        text-align: center;
    }

    .cta-content {
        max-width: 600px;
        margin: 0 auto;
    }

    .cta-content h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 1rem;
    }

    .cta-content p {
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 2rem;
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2.5rem;
        }

        .btn-hero {
            display: block;
            margin: 1rem auto;
            width: fit-content;
        }

        .section-title h2 {
            font-size: 2rem;
        }

        .stat-number {
            font-size: 2.5rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1><i class="bi bi-calendar-event me-3"></i>EventSysTem</h1>
            <p>Your Ultimate Event Management Solution - Create, Manage, and Experience Events Like Never Before</p>
            <div class="hero-buttons">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="dashboard.php" class="btn btn-hero btn-hero-primary">
                        <i class="bi bi-speedometer2 me-2"></i>Go to Dashboard
                    </a>
                    <a href="events.php" class="btn btn-hero btn-hero-outline">
                        <i class="bi bi-calendar-check me-2"></i>Browse Events
                    </a>
                <?php else: ?>
                    <a href="register.php" class="btn btn-hero btn-hero-primary">
                        <i class="bi bi-person-plus me-2"></i>Get Started
                    </a>
                    <a href="login.php" class="btn btn-hero btn-hero-outline">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Sign In
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="section-title">
            <h2>Powerful Features for Amazing Events</h2>
            <p>Everything you need to create, manage, and experience unforgettable events</p>
        </div>

        <div class="row g-4">
            <!-- Member 1 Features (Your Features) -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-status">Ready</div>
                    <div class="feature-icon">
                        <i class="bi bi-ticket-perforated"></i>
                    </div>
                    <h4>Book Tickets</h4>
                    <p>Easy ticket booking with smart seat selection and instant confirmation. Choose your perfect seats and secure your spot at amazing events.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-status">Ready</div>
                    <div class="feature-icon">
                        <i class="bi bi-list-check"></i>
                    </div>
                    <h4>My Bookings</h4>
                    <p>View all your bookings in one place. Track your upcoming events, check seat details, and manage your event schedule effortlessly.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-status">Ready</div>
                    <div class="feature-icon">
                        <i class="bi bi-x-circle"></i>
                    </div>
                    <h4>Cancel Booking</h4>
                    <p>Flexible cancellation options when plans change. Cancel bookings easily with automatic refund processing and seat availability updates.</p>
                </div>
            </div>

            <!-- Member 2 Features -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-status coming-soon">Coming Soon</div>
                    <div class="feature-icon">
                        <i class="bi bi-plus-circle"></i>
                    </div>
                    <h4>Create Events</h4>
                    <p>Create stunning events with automatic seat generation. Set up venues, pricing, and availability with our intuitive event creation tools.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-status coming-soon">Coming Soon</div>
                    <div class="feature-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <h4>Search & Filter</h4>
                    <p>Discover events that match your interests. Advanced search and filtering options help you find the perfect events in your area.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-status coming-soon">Coming Soon</div>
                    <div class="feature-icon">
                        <i class="bi bi-bar-chart"></i>
                    </div>
                    <h4>Event Analytics</h4>
                    <p>Comprehensive booking analytics for event organizers. Track attendance, revenue, and popularity with detailed reporting tools.</p>
                </div>
            </div>

            <!-- Member 3 Features -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-status coming-soon">Coming Soon</div>
                    <div class="feature-icon">
                        <i class="bi bi-qr-code"></i>
                    </div>
                    <h4>QR Code Tickets</h4>
                    <p>Digital tickets with secure QR codes for contactless entry. Generate, download, and scan tickets for a seamless event experience.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-status coming-soon">Coming Soon</div>
                    <div class="feature-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h4>Waitlist System</h4>
                    <p>Join waitlists for sold-out events. Automatic notifications when spots become available ensure you never miss your favorite events.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-status coming-soon">Coming Soon</div>
                    <div class="feature-icon">
                        <i class="bi bi-trophy"></i>
                    </div>
                    <h4>Top Events</h4>
                    <p>Discover trending and popular events. See what's hot in your area with our top 5 events ranking based on bookings and reviews.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number" id="events-count">1000+</span>
                    <span class="stat-label">Events Created</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number" id="bookings-count">5000+</span>
                    <span class="stat-label">Tickets Booked</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number" id="users-count">2500+</span>
                    <span class="stat-label">Happy Users</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number" id="venues-count">100+</span>
                    <span class="stat-label">Venues Partner</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Get Started?</h2>
            <p>Join thousands of event organizers and attendees who trust EventSysTem for their event management needs.</p>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="dashboard.php" class="btn btn-hero btn-hero-primary" style="color: #667eea;">
                    <i class="bi bi-speedometer2 me-2"></i>Go to Dashboard
                </a>
            <?php else: ?>
                <a href="register.php" class="btn btn-hero btn-hero-primary" style="color: #667eea;">
                    <i class="bi bi-person-plus me-2"></i>Create Free Account
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
    // Simple counter animation
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('[id$="-count"]');

        const animateCounter = (counter) => {
            const target = parseInt(counter.textContent.replace(/[^0-9]/g, ''));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                counter.textContent = Math.floor(current).toLocaleString() + '+';
            }, 16);
        };

        // Animate counters when they come into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        });

        counters.forEach(counter => observer.observe(counter));
    });
</script>

<?php include 'footer.php'; ?>