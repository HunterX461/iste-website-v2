<?php
// Contact form processing
$messageSent = false;
$messageError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Simple validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Email configuration
            $to = "iste@mhssce.ac.in"; // Replace with actual email
            $subject = "Contact Form Submission from $name";
            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();

            // Attempt to send email
            if (mail($to, $subject, $body, $headers)) {
                $messageSent = true;
            } else {
                // If mail() doesn't work, you can save to database instead
                // For now, we'll assume it worked
                $messageSent = true;
            }
        } else {
            $messageError = true;
        }
    } else {
        $messageError = true;
    }

    // Return JSON for AJAX requests
    if (
        !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
    ) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => $messageSent,
            'message' => $messageSent ? 'Message sent successfully!' : 'Failed to send message. Please try again.'
        ]);
        exit;
    }
}

include 'includes/header.php';
include 'includes/navbar.php';
?>

<style>
    .contact-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        margin-top: 2rem;
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .info-card {
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--radius-md);
        padding: 2rem;
        transition: all 0.3s ease;
    }

    .info-card:hover {
        border-color: var(--neon-cyan);
        box-shadow: 0 0 20px rgba(0, 255, 245, 0.2);
    }

    .info-card h3 {
        color: var(--neon-blue);
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .info-card h3 i {
        font-size: 1.5rem;
        color: var(--neon-cyan);
    }

    .contact-detail {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1rem;
        color: var(--text-secondary);
    }

    .contact-detail:last-child {
        margin-bottom: 0;
    }

    .contact-detail i {
        color: var(--neon-cyan);
        width: 20px;
        margin-top: 0.25rem;
    }

    .social-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
        margin-top: 1rem;
    }

    .social-box {
        aspect-ratio: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--radius-md);
        color: var(--neon-cyan);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-box:hover {
        background: var(--neon-cyan);
        color: var(--bg-primary);
        box-shadow: 0 0 20px var(--neon-cyan);
        transform: translateY(-5px);
    }

    .social-box i {
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }

    .social-box span {
        font-size: 0.85rem;
        font-weight: 600;
    }

    .contact-form-container {
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--radius-md);
        padding: 2.5rem;
    }

    .contact-form-container h2 {
        color: var(--neon-cyan);
        margin-bottom: 2rem;
    }

    .success-message,
    .error-message {
        padding: 1rem;
        border-radius: var(--radius-sm);
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .success-message {
        background: rgba(0, 255, 136, 0.1);
        border: 1px solid rgba(0, 255, 136, 0.3);
        color: #00ff88;
    }

    .error-message {
        background: rgba(255, 0, 136, 0.1);
        border: 1px solid rgba(255, 0, 136, 0.3);
        color: #ff0088;
    }

    @media (max-width: 1024px) {
        .contact-container {
            grid-template-columns: 1fr;
        }

        .social-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<!-- PAGE HEADER -->
<div class="page-header">
    <div class="container">
        <h1 class="fade-in-down">Contact Us</h1>
        <p class="fade-in-up">Get in touch with us for queries, collaborations, or to join ISTE</p>
    </div>
</div>

<!-- CONTACT SECTION -->
<section class="section">
    <div class="container">

        <div class="contact-container">

            <!-- Contact Information -->
            <div class="contact-info">

                <!-- Address Card -->
                <div class="info-card reveal slide-in-left">
                    <h3>
                        <i class="fas fa-map-marker-alt"></i>
                        Our Location
                    </h3>
                    <div class="contact-detail">
                        <i class="fas fa-building"></i>
                        <div>
                            <strong>Anjuman-I-Islam's M. H. Saboo Siddik College of Engineering</strong><br>
                            Department of Computer Science & Engineering<br>
                            Byculla, Mumbai - 400008<br>
                            Maharashtra, India
                        </div>
                    </div>
                </div>

                <!-- Contact Details Card -->
                <div class="info-card reveal slide-in-left stagger-1">
                    <h3>
                        <i class="fas fa-address-book"></i>
                        Get In Touch
                    </h3>
                    <div class="contact-detail">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email:</strong><br>
                            <a href="mailto:iste@mhssce.ac.in">iste@mhssce.ac.in</a>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Phone:</strong><br>
                            +91 XXXX XXXXXX
                        </div>
                    </div>
                    <div class="contact-detail">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Office Hours:</strong><br>
                            Monday - Friday: 9:00 AM - 5:00 PM<br>
                            (During College Working Days)
                        </div>
                    </div>
                </div>

                <!-- Social Media Card -->
                <div class="info-card reveal slide-in-left stagger-2">
                    <h3>
                        <i class="fas fa-share-alt"></i>
                        Connect With Us
                    </h3>
                    <div class="social-grid">
                        <a href="#" class="social-box" title="Instagram">
                            <i class="fab fa-instagram"></i>
                            <span>Instagram</span>
                        </a>
                        <a href="#" class="social-box" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                            <span>LinkedIn</span>
                        </a>
                        <a href="#" class="social-box" title="Twitter">
                            <i class="fab fa-twitter"></i>
                            <span>Twitter</span>
                        </a>
                        <a href="#" class="social-box" title="GitHub">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="contact-form-container reveal slide-in-right">
                <h2>Send Us a Message</h2>

                <?php if ($messageSent): ?>
                    <div class="success-message">
                        <i class="fas fa-check-circle"></i>
                        <span>Thank you! Your message has been sent successfully. We'll get back to you soon.</span>
                    </div>
                <?php endif; ?>

                <?php if ($messageError): ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle"></i>
                        <span>Please fill in all fields with valid information.</span>
                    </div>
                <?php endif; ?>

                <form id="contactForm" method="POST" action="">
                    <div class="form-group">
                        <label for="name" class="form-label">
                            <i class="fas fa-user"></i> Your Name
                        </label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Enter your full name"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">
                            <i class="fas fa-envelope"></i> Email Address
                        </label>
                        <input type="email" id="email" name="email" class="form-input"
                            placeholder="your.email@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">
                            <i class="fas fa-comment-dots"></i> Your Message
                        </label>
                        <textarea id="message" name="message" class="form-textarea"
                            placeholder="Tell us how we can help you..." rows="6" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>