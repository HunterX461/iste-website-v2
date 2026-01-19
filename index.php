<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<style>
    /* === HERO SECTION === */
    .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
        overflow: hidden;
        padding: 2rem 0;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 50% 50%,
                rgba(0, 243, 255, 0.1) 0%,
                transparent 50%);
        animation: pulse 8s ease-in-out infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 0.5;
            transform: scale(1);
        }

        50% {
            opacity: 1;
            transform: scale(1.1);
        }
    }

    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 1000px;
    }

    .hero-subtitle {
        font-size: clamp(1.1rem, 2vw, 1.4rem);
        color: var(--neon-cyan);
        font-weight: 500;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .hero-description {
        font-size: clamp(1rem, 1.5vw, 1.2rem);
        color: var(--text-secondary);
        margin-bottom: 2rem;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .hero-buttons {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    /* === SECTIONS === */
    .about-preview {
        background: var(--bg-secondary);
        position: relative;
    }

    .preview-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .preview-card {
        text-align: center;
    }

    .preview-card h3 {
        color: var(--neon-cyan);
        margin-top: 1rem;
    }

    /* === DOMAINS SECTION === */
    .domains-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .domain-card {
        text-align: center;
        position: relative;
    }

    .domain-card h3 {
        color: var(--neon-blue);
        margin-bottom: 1rem;
    }

    .domain-card p {
        color: var(--text-secondary);
        line-height: 1.8;
    }

    .domain-card ul {
        list-style: none;
        padding: 0;
        margin-top: 1rem;
    }

    .domain-card ul li {
        color: var(--text-secondary);
        padding: 0.5rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .domain-card ul li:last-child {
        border-bottom: none;
    }

    .domain-card ul li i {
        color: var(--neon-cyan);
        margin-right: 0.5rem;
    }

    /* === EVENTS PREVIEW === */
    .events-preview {
        background: var(--bg-secondary);
    }

    .events-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .event-card {
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--radius-md);
        overflow: hidden;
        transition: all 0.4s ease;
    }

    .event-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 0 30px rgba(0, 243, 255, 0.3);
        border-color: var(--neon-blue);
    }

    .event-image {
        width: 100%;
        height: 200px;
        background: linear-gradient(135deg, var(--neon-blue), var(--neon-violet));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 4rem;
        color: rgba(255, 255, 255, 0.2);
        position: relative;
        overflow: hidden;
    }

    .event-image::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .event-card:hover .event-image::after {
        left: 100%;
    }

    .event-content {
        padding: 1.5rem;
    }

    .event-badge {
        display: inline-block;
        padding: 0.3rem 0.8rem;
        background: rgba(0, 243, 255, 0.1);
        border: 1px solid var(--neon-blue);
        border-radius: 50px;
        color: var(--neon-blue);
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 1rem;
    }

    .event-content h3 {
        color: var(--text-primary);
        font-size: 1.4rem;
        margin-bottom: 0.5rem;
    }

    .event-meta {
        color: var(--text-muted);
        font-size: 0.95rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .event-meta i {
        color: var(--neon-cyan);
    }

    .event-content p {
        color: var(--text-secondary);
        margin-bottom: 1.5rem;
    }
</style>

<!-- HERO SECTION -->
<section class="hero">
    <div class="container">
        <div class="hero-content fade-in-up">
            <p class="hero-subtitle">Welcome to</p>
            <h1 class="neon-pulse">ISTE students Chapter</h1>
            <p class="hero-description">
                Indian Society for Technical Education<br>
                <strong>Department of Computer Science & Engineering (IOTCSBCT)</strong><br>

            </p>
            <div class="hero-buttons">
                <a href="contact.php" class="btn btn-primary">
                    <i class="fas fa-user-plus"></i> Join ISTE
                </a>
                <a href="events.php" class="btn btn-secondary">
                    <i class="fas fa-calendar-alt"></i> View Events
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT PREVIEW -->
<section class="section about-preview">
    <div class="container">
        <h2 class="section-title reveal">Empowering Future Tech Leaders</h2>
        <p class="text-center reveal" style="max-width: 800px; margin: 0 auto 2rem;">
            ISTE students Chapter at MH Saboo Siddik is dedicated to fostering innovation,
            technical excellence, and cutting-edge knowledge in emerging technologies.
        </p>

        <div class="preview-cards">
            <div class="glass-card reveal stagger-1">
                <div class="icon-box">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Innovation</h3>
                <p>Driving creative solutions through hackathons, workshops, and collaborative projects that push
                    technological boundaries.</p>
            </div>

            <div class="glass-card reveal stagger-2">
                <div class="icon-box">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Cybersecurity</h3>
                <p>Building a secure digital future with hands-on training in ethical hacking, network security, and
                    cyber defense strategies.</p>
            </div>

            <div class="glass-card reveal stagger-3">
                <div class="icon-box">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3>Emerging Tech</h3>
                <p>Exploring cutting-edge technologies including IoT, Blockchain, AI, and preparing studentss for
                    tomorrow's challenges.</p>
            </div>
        </div>
    </div>
</section>

<!-- DOMAINS SECTION -->
<section class="section">
    <div class="container">
        <h2 class="section-title reveal">Our Focus Domains</h2>

        <div class="domains-grid">
            <!-- IoT -->
            <div class="glass-card domain-card reveal stagger-1">
                <div class="icon-box" style="margin: 0 auto;">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3>Internet of Things (IoT)</h3>
                <p>Connecting the physical and digital world through smart devices and innovative solutions.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Smart Device Development</li>
                    <li><i class="fas fa-check-circle"></i> Sensor Networks</li>
                    <li><i class="fas fa-check-circle"></i> Industrial IoT Applications</li>
                    <li><i class="fas fa-check-circle"></i> Home Automation Projects</li>
                </ul>
            </div>

            <!-- Cybersecurity -->
            <div class="glass-card domain-card reveal stagger-2">
                <div class="icon-box" style="margin: 0 auto;">
                    <i class="fas fa-lock"></i>
                </div>
                <h3>Cybersecurity</h3>
                <p>Protecting digital infrastructure and building secure systems for the modern world.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Ethical Hacking & Penetration Testing</li>
                    <li><i class="fas fa-check-circle"></i> Network Security</li>
                    <li><i class="fas fa-check-circle"></i> Cryptography & Data Protection</li>
                    <li><i class="fas fa-check-circle"></i> Security Audits & Compliance</li>
                </ul>
            </div>

            <!-- Blockchain -->
            <div class="glass-card domain-card reveal stagger-3">
                <div class="icon-box" style="margin: 0 auto;">
                    <i class="fas fa-cube"></i>
                </div>
                <h3>Blockchain Technology</h3>
                <p>Revolutionizing trust and transparency through decentralized systems.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Smart Contract Development</li>
                    <li><i class="fas fa-check-circle"></i> Cryptocurrency & DeFi</li>
                    <li><i class="fas fa-check-circle"></i> Distributed Ledger Technology</li>
                    <li><i class="fas fa-check-circle"></i> Web3 Applications</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- UPCOMING EVENTS PREVIEW -->
<section class="section events-preview">
    <div class="container">
        <h2 class="section-title reveal">Upcoming Events</h2>
        <p class="text-center reveal" style="max-width: 700px; margin: 0 auto 2rem;">
            Join us for exciting workshops, seminars, and hackathons designed to enhance your skills and expand your
            network.
        </p>

        <div class="events-grid">
            <!-- Event 1 -->
            <div class="event-card reveal stagger-1">
                <div class="event-image">
                    <i class="fas fa-code"></i>
                </div>
                <div class="event-content">
                    <span class="event-badge">Workshop</span>
                    <h3>Web3 Development Workshop</h3>
                    <div class="event-meta">
                        <i class="fas fa-calendar"></i>
                        <span>25th February 2026</span>
                    </div>
                    <p>Learn to build decentralized applications with hands-on training in Smart Contracts and dApp
                        development.</p>
                    <a href="events.php" class="btn btn-primary" style="width: 100%;">
                        Register Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="event-card reveal stagger-2">
                <div class="event-image">
                    <i class="fas fa-user-secret"></i>
                </div>
                <div class="event-content">
                    <span class="event-badge">Seminar</span>
                    <h3>Ethical Hacking Seminar</h3>
                    <div class="event-meta">
                        <i class="fas fa-calendar"></i>
                        <span>10th March 2026</span>
                    </div>
                    <p>Explore the world of cybersecurity with expert talks on penetration testing and security best
                        practices.</p>
                    <a href="events.php" class="btn btn-primary" style="width: 100%;">
                        Register Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="event-card reveal stagger-3">
                <div class="event-image">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="event-content">
                    <span class="event-badge">Hackathon</span>
                    <h3>IoT Innovation Challenge</h3>
                    <div class="event-meta">
                        <i class="fas fa-calendar"></i>
                        <span>5-6th April 2026</span>
                    </div>
                    <p>48-hour hackathon to build innovative IoT solutions. Win prizes and showcase your creativity!</p>
                    <a href="events.php" class="btn btn-primary" style="width: 100%;">
                        Register Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="events.php" class="btn btn-secondary">
                View All Events <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>