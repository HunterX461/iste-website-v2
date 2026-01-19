<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<style>
    .page-header {
        padding: 6rem 0 3rem;
        text-align: center;
        background: linear-gradient(135deg, rgba(0, 243, 255, 0.05), rgba(176, 0, 255, 0.05));
        border-bottom: 1px solid rgba(0, 243, 255, 0.2);
    }

    .page-header h1 {
        margin-bottom: 1rem;
    }

    .page-header p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto;
    }

    .content-section {
        margin-bottom: 3rem;
    }

    .content-section h2 {
        color: var(--neon-cyan);
        margin-bottom: 1.5rem;
    }

    .timeline {
        position: relative;
        padding-left: 3rem;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(180deg, var(--neon-blue), var(--neon-violet));
        box-shadow: 0 0 10px var(--neon-blue);
    }

    .timeline-item {
        position: relative;
        margin-bottom: 2rem;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -3.5rem;
        top: 0.5rem;
        width: 12px;
        height: 12px;
        background: var(--neon-cyan);
        border-radius: 50%;
        box-shadow: 0 0 15px var(--neon-cyan);
    }

    .timeline-item h3 {
        color: var(--neon-blue);
        font-size: 1.4rem;
        margin-bottom: 0.5rem;
    }

    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .benefit-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1.5rem;
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--radius-md);
        transition: all 0.3s ease;
    }

    .benefit-item:hover {
        border-color: var(--neon-cyan);
        box-shadow: 0 0 20px rgba(0, 255, 245, 0.2);
        transform: translateX(10px);
    }

    .benefit-item i {
        font-size: 2rem;
        color: var(--neon-cyan);
        min-width: 40px;
    }

    .benefit-item div h4 {
        color: var(--neon-blue);
        margin-bottom: 0.5rem;
    }

    .benefit-item div p {
        color: var(--text-secondary);
        margin: 0;
    }

    .objectives-list {
        list-style: none;
        padding: 0;
    }

    .objectives-list li {
        padding: 1rem;
        margin-bottom: 1rem;
        background: var(--glass-bg);
        border-left: 3px solid var(--neon-blue);
        border-radius: var(--radius-sm);
        color: var(--text-secondary);
        transition: all 0.3s ease;
    }

    .objectives-list li:hover {
        background: rgba(0, 243, 255, 0.05);
        border-left-color: var(--neon-cyan);
        transform: translateX(5px);
    }

    .objectives-list li i {
        color: var(--neon-cyan);
        margin-right: 0.75rem;
    }
</style>

<!-- PAGE HEADER -->
<div class="page-header">
    <div class="container">
        <h1 class="fade-in-down">About ISTE Chapter</h1>
        <p class="fade-in-up">Empowering students through technical education and innovation since establishment</p>
    </div>
</div>

<!-- MAIN CONTENT -->
<section class="section">
    <div class="container">

        <!-- What is ISTE -->
        <div class="content-section reveal">
            <div class="glass-card" style="padding: 2rem;">
                <h2><i class="fas fa-info-circle"></i> What is ISTE?</h2>
                <p>
                    The <strong>Indian Society for Technical Education (ISTE)</strong> is a national, professional,
                    non-profit organization dedicated to the development of quality technical education in India.
                    ISTE focuses on improving the quality of technical education through faculty development programs,
                    workshops, seminars, and promoting innovation in engineering education.
                </p>
                <p>
                    Our <strong>ISTE Student Chapter</strong> at MH Saboo Siddik College of Engineering serves as a
                    vibrant community where students passionate about technology come together to learn, collaborate,
                    and innovate. We specialize in cutting-edge domains including <strong>IoT, Cybersecurity, and
                        Blockchain Technology</strong>.
                </p>
            </div>
        </div>

        <!-- Vision & Mission -->
        <div class="content-section">
            <div class="grid-2">
                <div class="glass-card reveal slide-in-left">
                    <div class="icon-box">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2>Our Vision</h2>
                    <p>
                        To be a leading student chapter that cultivates technical excellence, innovation,
                        and leadership in emerging technologies, preparing students to become future-ready
                        professionals who drive technological advancement and societal impact.
                    </p>
                </div>

                <div class="glass-card reveal slide-in-right">
                    <div class="icon-box">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2>Our Mission</h2>
                    <p>
                        To provide a platform for students to enhance their technical skills, foster innovation,
                        and gain practical experience through workshops, seminars, hackathons, and collaborative
                        projects in IoT, Cybersecurity, and Blockchain domains.
                    </p>
                </div>
            </div>
        </div>

        <!-- Objectives -->
        <div class="content-section reveal">
            <h2 class="section-title">Our Objectives</h2>
            <ul class="objectives-list">
                <li>
                    <i class="fas fa-graduation-cap"></i>
                    <strong>Skill Development:</strong> Organize technical workshops and training sessions to enhance
                    students' knowledge in emerging technologies like IoT, Cybersecurity, and Blockchain.
                </li>
                <li>
                    <i class="fas fa-users"></i>
                    <strong>Collaborative Learning:</strong> Foster a collaborative environment where students can work
                    together on innovative projects and learn from industry experts.
                </li>
                <li>
                    <i class="fas fa-trophy"></i>
                    <strong>Competitions & Events:</strong> Conduct hackathons, coding challenges, and technical
                    competitions to encourage practical application of theoretical knowledge.
                </li>
                <li>
                    <i class="fas fa-handshake"></i>
                    <strong>Industry Connect:</strong> Bridge the gap between academia and industry by organizing
                    guest lectures, industrial visits, and internship opportunities.
                </li>
                <li>
                    <i class="fas fa-project-diagram"></i>
                    <strong>Research & Innovation:</strong> Encourage students to engage in research activities
                    and innovative projects that contribute to technological advancement.
                </li>
                <li>
                    <i class="fas fa-certificate"></i>
                    <strong>Certification Programs:</strong> Provide access to certification courses and training
                    programs that enhance employability and career prospects.
                </li>
            </ul>
        </div>

        <!-- Benefits for Students -->
        <div class="content-section reveal">
            <h2 class="section-title">Student Benefits</h2>
            <p class="text-center" style="max-width: 800px; margin: 0 auto 2rem;">
                Join ISTE Student Chapter and unlock a world of opportunities to grow, learn, and excel in your
                technical journey.
            </p>

            <div class="benefits-grid">
                <div class="benefit-item">
                    <i class="fas fa-book-open"></i>
                    <div>
                        <h4>Knowledge Enhancement</h4>
                        <p>Access to exclusive workshops, webinars, and technical sessions by industry experts.</p>
                    </div>
                </div>

                <div class="benefit-item">
                    <i class="fas fa-network-wired"></i>
                    <div>
                        <h4>Networking Opportunities</h4>
                        <p>Connect with like-minded peers, alumni, and professionals in the tech industry.</p>
                    </div>
                </div>

                <div class="benefit-item">
                    <i class="fas fa-tools"></i>
                    <div>
                        <h4>Hands-on Experience</h4>
                        <p>Work on real-world projects and gain practical experience in cutting-edge technologies.</p>
                    </div>
                </div>

                <div class="benefit-item">
                    <i class="fas fa-award"></i>
                    <div>
                        <h4>Recognition & Certificates</h4>
                        <p>Earn certificates of participation and achievement to boost your resume.</p>
                    </div>
                </div>

                <div class="benefit-item">
                    <i class="fas fa-briefcase"></i>
                    <div>
                        <h4>Career Advancement</h4>
                        <p>Access to internship opportunities, placement assistance, and career guidance.</p>
                    </div>
                </div>

                <div class="benefit-item">
                    <i class="fas fa-rocket"></i>
                    <div>
                        <h4>Innovation Platform</h4>
                        <p>Showcase your innovative ideas and projects at national and international platforms.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-3 reveal">
            <h3 style="margin-bottom: 1.5rem;">Ready to Join Our Community?</h3>
            <a href="contact.php" class="btn btn-primary btn-pulse">
                <i class="fas fa-user-plus"></i> Become a Member
            </a>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>