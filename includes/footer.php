<style>
    /* === FOOTER STYLES === */
    .footer {
        background: var(--bg-secondary);
        border-top: 1px solid rgba(0, 243, 255, 0.2);
        padding: 3rem 0 1rem;
        margin-top: 4rem;
        position: relative;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 1px;
        background: linear-gradient(90deg,
                transparent,
                var(--neon-blue),
                var(--neon-violet),
                transparent);
    }

    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .footer-section h3 {
        font-size: 1.3rem;
        color: var(--neon-cyan);
        margin-bottom: 1rem;
        font-family: 'Orbitron', sans-serif;
    }

    .footer-section p,
    .footer-section li {
        color: var(--text-secondary);
        font-size: 1rem;
        line-height: 1.8;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin-bottom: 0.5rem;
    }

    .footer-section ul li a {
        color: var(--text-secondary);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .footer-section ul li a:hover {
        color: var(--neon-cyan);
        padding-left: 5px;
    }

    .social-links {
        display: flex;
        gap: 1rem;
        margin-top: 1rem;
    }

    .social-link {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: 50%;
        color: var(--neon-cyan);
        font-size: 1.2rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        background: var(--neon-cyan);
        color: var(--bg-primary);
        box-shadow: 0 0 20px rgba(0, 255, 245, 0.6);
        transform: translateY(-3px);
    }

    .footer-bottom {
        text-align: center;
        padding-top: 2rem;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        color: var(--text-muted);
        font-size: 0.95rem;
    }

    .footer-bottom a {
        color: var(--neon-blue);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .social-links {
            justify-content: center;
        }
    }
</style>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- About Section -->
            <div class="footer-section">
                <h3><i class="fas fa-microchip"></i> ISTE Chapter</h3>
                <p>Indian Society for Technical Education (ISTE) Student Chapter at MH Saboo Siddik College of
                    Engineering.</p>
                <p><strong>Department:</strong> Computer Science & Engineering</p>
                <p><strong>Specialization:</strong> IoT, Cybersecurity & Blockchain</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h3><i class="fas fa-link"></i> Quick Links</h3>
                <ul>
                    <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="about.php"><i class="fas fa-chevron-right"></i> About ISTE</a></li>
                    <li><a href="events.php"><i class="fas fa-chevron-right"></i> Events</a></li>
                    <li><a href="team.php"><i class="fas fa-chevron-right"></i> Our Team</a></li>
                    <li><a href="gallery.php"><i class="fas fa-chevron-right"></i> Gallery</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-section">
                <h3><i class="fas fa-address-card"></i> Contact</h3>
                <p><i class="fas fa-map-marker-alt"></i> Anjuman-I-Islam's M. H. Saboo Siddik College of Engineering,
                    Mumbai</p>
                <p><i class="fas fa-envelope"></i> iste@mhssce.ac.in</p>
                <p><i class="fas fa-phone"></i> +91 XXXX XXXXXX</p>

                <div class="social-links">
                    <a href="#" class="social-link" title="Instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-link" title="LinkedIn" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-link" title="Twitter" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link" title="GitHub" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy;
                <?php echo date('Y'); ?> ISTE Student Chapter - MH Saboo Siddik College of Engineering. All Rights
                Reserved.
            </p>
            <p>Designed with <i class="fas fa-heart" style="color: var(--neon-pink);"></i> by ISTE Web Team</p>
        </div>
    </div>
</footer>

<!-- JavaScript Files -->
<script src="assets/js/particles.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>