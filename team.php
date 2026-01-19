<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<style>
    .team-section {
        margin-bottom: 4rem;
    }

    .team-section-title {
        font-size: 2rem;
        color: var(--neon-cyan);
        margin-bottom: 2rem;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }

    .team-card {
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--radius-md);
        padding: 2rem;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }

    .team-card:hover {
        transform: translateY(-15px);
        border-color: var(--neon-blue);
        box-shadow: 0 15px 40px rgba(0, 243, 255, 0.3);
    }

    .team-photo {
        width: 150px;
        height: 150px;
        margin: 0 auto 1.5rem;
        position: relative;
    }

    .team-photo::before {
        content: '';
        position: absolute;
        inset: -4px;
        background: linear-gradient(135deg, var(--neon-blue), var(--neon-violet));
        border-radius: 50%;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .team-card:hover .team-photo::before {
        opacity: 1;
        animation: rotate 10s linear infinite;
    }

    .team-photo img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--glass-border);
    }

    .team-name {
        font-size: 1.4rem;
        color: var(--text-primary);
        margin-bottom: 0.5rem;
        font-family: 'Orbitron', sans-serif;
    }

    .team-role {
        color: var(--neon-cyan);
        font-size: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 1rem;
    }

    .team-bio {
        color: var(--text-secondary);
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .team-social {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }

    .social-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: 50%;
        color: var(--neon-cyan);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        background: var(--neon-cyan);
        color: var(--bg-primary);
        box-shadow: 0 0 15px var(--neon-cyan);
        transform: translateY(-3px);
    }

    /* Faculty Coordinator - Larger Card */
    .faculty-card {
        max-width: 500px;
        margin: 0 auto;
    }

    .faculty-card .team-photo {
        width: 180px;
        height: 180px;
    }
</style>

<!-- PAGE HEADER -->
<div class="page-header">
    <div class="container">
        <h1 class="fade-in-down">Our Team</h1>
        <p class="fade-in-up">Meet the dedicated individuals driving innovation and excellence at ISTE</p>
    </div>
</div>

<!-- MAIN CONTENT -->
<section class="section">
    <div class="container">

        <!-- Faculty Coordinator -->
        <div class="team-section reveal">
            <h2 class="team-section-title">Faculty Coordinator</h2>
            <div class="team-card faculty-card">
                <div class="team-photo">
                    <img src="assets/images/placeholder-team/faculty.jpg" alt="Dr. Faculty Name"
                        onerror="this.src='https://ui-avatars.com/api/?name=Faculty+Coordinator&background=0D1117&color=00f3ff&size=150&bold=true'">
                </div>
                <h3 class="team-name">Dr. [Faculty Name]</h3>
                <p class="team-role">Faculty Coordinator</p>
                <p class="team-bio">
                    Professor in the Department of Computer Science & Engineering with expertise in
                    IoT, Cybersecurity, and Blockchain. Dedicated to guiding students towards
                    technical excellence and innovation.
                </p>
                <div class="team-social">
                    <a href="#" class="social-icon" title="Email" aria-label="Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="#" class="social-icon" title="LinkedIn" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Core Team -->
        <div class="team-section reveal">
            <h2 class="team-section-title">Core Team 2025-26</h2>
            <div class="team-grid">

                <!-- Chairperson -->
                <div class="team-card">
                    <div class="team-photo">
                        <img src="assets/images/placeholder-team/chairperson.jpg" alt="Chairperson"
                            onerror="this.src='https://ui-avatars.com/api/?name=Chairperson&background=0D1117&color=00f3ff&size=150&bold=true'">
                    </div>
                    <h3 class="team-name">[Name]</h3>
                    <p class="team-role">Chairperson</p>
                    <p class="team-bio">Leading the chapter with vision and dedication towards technical excellence.</p>
                    <div class="team-social">
                        <a href="#" class="social-icon" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon" title="GitHub" aria-label="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>

                <!-- Vice Chairperson -->
                <div class="team-card">
                    <div class="team-photo">
                        <img src="assets/images/placeholder-team/vice-chair.jpg" alt="Vice Chairperson"
                            onerror="this.src='https://ui-avatars.com/api/?name=Vice+Chair&background=0D1117&color=b000ff&size=150&bold=true'">
                    </div>
                    <h3 class="team-name">[Name]</h3>
                    <p class="team-role">Vice Chairperson</p>
                    <p class="team-bio">Supporting leadership and coordinating technical events and workshops.</p>
                    <div class="team-social">
                        <a href="#" class="social-icon" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon" title="GitHub" aria-label="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>

                <!-- Secretary -->
                <div class="team-card">
                    <div class="team-photo">
                        <img src="assets/images/placeholder-team/secretary.jpg" alt="Secretary"
                            onerror="this.src='https://ui-avatars.com/api/?name=Secretary&background=0D1117&color=00fff5&size=150&bold=true'">
                    </div>
                    <h3 class="team-name">[Name]</h3>
                    <p class="team-role">Secretary</p>
                    <p class="team-bio">Managing communications and maintaining chapter documentation.</p>
                    <div class="team-social">
                        <a href="#" class="social-icon" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon" title="GitHub" aria-label="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>

                <!-- Treasurer -->
                <div class="team-card">
                    <div class="team-photo">
                        <img src="assets/images/placeholder-team/treasurer.jpg" alt="Treasurer"
                            onerror="this.src='https://ui-avatars.com/api/?name=Treasurer&background=0D1117&color=00ff88&size=150&bold=true'">
                    </div>
                    <h3 class="team-name">[Name]</h3>
                    <p class="team-role">Treasurer</p>
                    <p class="team-bio">Managing finances and ensuring proper allocation of chapter resources.</p>
                    <div class="team-social">
                        <a href="#" class="social-icon" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon" title="GitHub" aria-label="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>

                <!-- Technical Head -->
                <div class="team-card">
                    <div class="team-photo">
                        <img src="assets/images/placeholder-team/tech-head.jpg" alt="Technical Head"
                            onerror="this.src='https://ui-avatars.com/api/?name=Tech+Head&background=0D1117&color=ff00ff&size=150&bold=true'">
                    </div>
                    <h3 class="team-name">[Name]</h3>
                    <p class="team-role">Technical Head</p>
                    <p class="team-bio">Leading technical workshops and managing development projects.</p>
                    <div class="team-social">
                        <a href="#" class="social-icon" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon" title="GitHub" aria-label="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>

                <!-- Events Coordinator -->
                <div class="team-card">
                    <div class="team-photo">
                        <img src="assets/images/placeholder-team/events.jpg" alt="Events Coordinator"
                            onerror="this.src='https://ui-avatars.com/api/?name=Events+Lead&background=0D1117&color=00f3ff&size=150&bold=true'">
                    </div>
                    <h3 class="team-name">[Name]</h3>
                    <p class="team-role">Events Coordinator</p>
                    <p class="team-bio">Planning and executing engaging events, hackathons, and seminars.</p>
                    <div class="team-social">
                        <a href="#" class="social-icon" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon" title="GitHub" aria-label="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Volunteers -->
        <div class="team-section reveal">
            <h2 class="team-section-title">Volunteers</h2>
            <div class="team-grid">

                <div class="team-card">
                    <div class="team-photo">
                        <img src="assets/images/placeholder-team/volunteer1.jpg" alt="Volunteer"
                            onerror="this.src='https://ui-avatars.com/api/?name=Volunteer+1&background=0D1117&color=00f3ff&size=150'">
                    </div>
                    <h3 class="team-name">[Volunteer Name]</h3>
                    <p class="team-role">Volunteer</p>
                    <div class="team-social">
                        <a href="#" class="social-icon" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-photo">
                        <img src="assets/images/placeholder-team/volunteer2.jpg" alt="Volunteer"
                            onerror="this.src='https://ui-avatars.com/api/?name=Volunteer+2&background=0D1117&color=b000ff&size=150'">
                    </div>
                    <h3 class="team-name">[Volunteer Name]</h3>
                    <p class="team-role">Volunteer</p>
                    <div class="team-social">
                        <a href="#" class="social-icon" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-photo">
                        <img src="assets/images/placeholder-team/volunteer3.jpg" alt="Volunteer"
                            onerror="this.src='https://ui-avatars.com/api/?name=Volunteer+3&background=0D1117&color=00fff5&size=150'">
                    </div>
                    <h3 class="team-name">[Volunteer Name]</h3>
                    <p class="team-role">Volunteer</p>
                    <div class="team-social">
                        <a href="#" class="social-icon" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-photo">
                        <img src="assets/images/placeholder-team/volunteer4.jpg" alt="Volunteer"
                            onerror="this.src='https://ui-avatars.com/api/?name=Volunteer+4&background=0D1117&color=00ff88&size=150'">
                    </div>
                    <h3 class="team-name">[Volunteer Name]</h3>
                    <p class="team-role">Volunteer</p>
                    <div class="team-social">
                        <a href="#" class="social-icon" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Join CTA -->
        <div class="text-center mt-3 reveal">
            <h3 style="margin-bottom: 1.5rem;">Want to Join Our Team?</h3>
            <p style="max-width: 600px; margin: 0 auto 2rem; color: var(--text-secondary);">
                We're always looking for passionate individuals to join our team and contribute to the tech community.
            </p>
            <a href="contact.php" class="btn btn-primary btn-pulse">
                <i class="fas fa-user-plus"></i> Get Involved
            </a>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>