<?php 
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benerindisini - Your Site</title>
    
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <a href="#" class="logo">Benerindisini</a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero fade-in-up">
        <h1>Welcome to Benerindisini</h1>
        <p>Your amazing platform that delivers exceptional value and transforms the way you work. Join thousands who trust us daily.</p>
        <a href="#contact" class="cta-button">Get Started Today</a>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <h2 class="section-title">Why Choose Us?</h2>
        <div class="features-grid">
            <div class="feature-card fade-in-up">
                <div class="feature-icon">🚀</div>
                <h3>Lightning Fast</h3>
                <p>Experience incredible speed and performance that keeps you ahead of the competition.</p>
            </div>
            <div class="feature-card fade-in-up">
                <div class="feature-icon">🔒</div>
                <h3>Secure & Reliable</h3>
                <p>Your data is protected with enterprise-grade security and 99.9% uptime guarantee.</p>
            </div>
            <div class="feature-card fade-in-up">
                <div class="feature-icon">📱</div>
                <h3>Mobile Ready</h3>
                <p>Works perfectly on all devices with responsive design that adapts to any screen.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="about-container">
            <div class="about-text">
                <h2>About Our Platform</h2>
                <p>We built Benerindisini to solve real problems for real people. Our mission is to empower businesses with tools that actually work.</p>
                <p>With years of experience and thousands of happy customers, we're just getting started on our journey to revolutionize the industry.</p>
                <a href="#contact" class="cta-button">Learn More</a>
            </div>
            <div class="about-image">
                ✨
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Ready to Get Started?</h2>
        <p>Drop us a message and we'll get back to you within 24 hours!</p>
        <form class="contact-form">
            <div class="form-group">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
            </div>
            <input type="text" placeholder="Subject" required>
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit" class="cta-button">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Benerindisini. All rights reserved. | Made with ❤️</p>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission
        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We\'ll get back to you soon.');
            this.reset();
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(102, 126, 234, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
                header.style.backdropFilter = 'none';
            }
        });
    </script>
</body>
</html>
?>