<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<style>
    .filter-container {
        display: flex;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;
        margin-bottom: 3rem;
    }

    .filter-btn {
        padding: 0.75rem 1.5rem;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--radius-sm);
        color: var(--text-secondary);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: rgba(0, 243, 255, 0.1);
        border-color: var(--neon-blue);
        color: var(--neon-cyan);
        box-shadow: 0 0 15px rgba(0, 243, 255, 0.3);
    }

    .events-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 2rem;
    }

    .event-card {
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--radius-md);
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        opacity: 1;
        transform: scale(1);
    }

    .event-card:hover {
        transform: translateY(-10px) scale(1.02);
        border-color: var(--neon-blue);
        box-shadow: 0 10px 40px rgba(0, 243, 255, 0.3);
    }

    .event-poster {
        width: 100%;
        height: 220px;
        background: linear-gradient(135deg, var(--neon-blue), var(--neon-violet));
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .event-poster i {
        font-size: 5rem;
        color: rgba(255, 255, 255, 0.2);
        z-index: 1;
    }

    .event-poster::after {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.1), transparent);
    }

    .event-info {
        padding: 1.5rem;
    }

    .event-category {
        display: inline-block;
        padding: 0.4rem 1rem;
        background: rgba(0, 243, 255, 0.1);
        border: 1px solid var(--neon-blue);
        border-radius: 50px;
        color: var(--neon-blue);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 1rem;
    }

    .event-category.workshop {
        border-color: #00f3ff;
        color: #00f3ff;
    }

    .event-category.seminar {
        border-color: #b000ff;
        color: #b000ff;
    }

    .event-category.hackathon {
        border-color: #00ff88;
        color: #00ff88;
    }

    .event-category.webinar {
        border-color: #ff00ff;
        color: #ff00ff;
    }

    .event-info h3 {
        color: var(--text-primary);
        font-size: 1.5rem;
        margin-bottom: 0.75rem;
    }

    .event-details {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }

    .event-detail {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--text-secondary);
        font-size: 0.95rem;
    }

    .event-detail i {
        color: var(--neon-cyan);
        width: 20px;
    }

    .event-info p {
        color: var(--text-secondary);
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }

    .event-info .btn {
        width: 100%;
    }

    /* Upcoming Events Overlay */
    .upcoming-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(10, 10, 15, 0.85);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        border-radius: var(--radius-md);
    }

    .upcoming-content {
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .upcoming-content i {
        font-size: 5rem;
        color: var(--neon-cyan);
        margin-bottom: 1rem;
        animation: float 3s ease-in-out infinite;
    }

    .upcoming-content h2 {
        font-size: clamp(3rem, 8vw, 6rem);
        font-family: 'Orbitron', sans-serif;
        background: linear-gradient(135deg, var(--neon-blue), var(--neon-cyan), var(--neon-violet));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 0 40px rgba(0, 243, 255, 0.5);
        letter-spacing: 8px;
        margin-bottom: 1rem;
        animation: neonPulse 3s ease-in-out infinite;
    }

    .upcoming-content p {
        font-size: 1.3rem;
        color: var(--text-secondary);
        margin-top: 1rem;
    }

    .pulse-ring {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        height: 300px;
        border: 2px solid var(--neon-cyan);
        border-radius: 50%;
        opacity: 0;
        animation: pulseRing 3s ease-out infinite;
    }

    @keyframes pulseRing {
        0% {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.5);
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 0;
            transform: translate(-50%, -50%) scale(2);
        }
    }
</style>

<!-- PAGE HEADER -->
<div class="page-header">
    <div class="container">
        <h1 class="fade-in-down">Events & Workshops</h1>
        <p class="fade-in-up">Join our exciting lineup of technical events, workshops, and competitions</p>
    </div>
</div>

<!-- EVENTS SECTION -->
<section class="section">
    <div class="container">

        <!-- Filter Buttons -->
        <div class="filter-container reveal">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-th"></i> All Events
            </button>
            <button class="filter-btn" data-filter="workshop">
                <i class="fas fa-chalkboard-teacher"></i> Workshops
            </button>
            <button class="filter-btn" data-filter="seminar">
                <i class="fas fa-users"></i> Seminars
            </button>
            <button class="filter-btn" data-filter="hackathon">
                <i class="fas fa-code"></i> Hackathons
            </button>
            <button class="filter-btn" data-filter="webinar">
                <i class="fas fa-video"></i> Webinars
            </button>
        </div>

        <!-- Events Grid -->
        <div class="events-container" style="position: relative;">

            <!-- Event 1: Web3 Workshop -->
            <div class="event-card reveal" data-category="workshop">
                <div class="event-poster">
                    <i class="fas fa-code"></i>
                </div>
                <div class="event-info">
                    <span class="event-category workshop">Workshop</span>
                    <h3>Web3 Development Workshop</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <i class="fas fa-calendar"></i>
                            <span>25th February 2026</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-clock"></i>
                            <span>10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Seminar Hall, MH Saboo Siddik</span>
                        </div>
                    </div>
                    <p>
                        Learn to build decentralized applications with hands-on training in Smart Contracts,
                        Solidity, and dApp development. Perfect for blockchain enthusiasts!
                    </p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Register Now
                    </a>
                </div>
            </div>

            <!-- Event 2: Ethical Hacking Seminar -->
            <div class="event-card reveal" data-category="seminar">
                <div class="event-poster">
                    <i class="fas fa-user-secret"></i>
                </div>
                <div class="event-info">
                    <span class="event-category seminar">Seminar</span>
                    <h3>Ethical Hacking Seminar</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <i class="fas fa-calendar"></i>
                            <span>10th March 2026</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-clock"></i>
                            <span>2:00 PM - 5:00 PM</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Auditorium, MH Saboo Siddik</span>
                        </div>
                    </div>
                    <p>
                        Explore the world of cybersecurity with expert talks on penetration testing,
                        vulnerability assessment, and security best practices from industry professionals.
                    </p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Register Now
                    </a>
                </div>
            </div>

            <!-- Event 3: IoT Hackathon -->
            <div class="event-card reveal" data-category="hackathon">
                <div class="event-poster">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="event-info">
                    <span class="event-category hackathon">Hackathon</span>
                    <h3>IoT Innovation Challenge</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <i class="fas fa-calendar"></i>
                            <span>5-6th April 2026 (2 Days)</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-clock"></i>
                            <span>9:00 AM onwards</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Computer Lab, MH Saboo Siddik</span>
                        </div>
                    </div>
                    <p>
                        48-hour hackathon to build innovative IoT solutions. Win exciting prizes and
                        showcase your creativity! Team participation encouraged.
                    </p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Register Team
                    </a>
                </div>
            </div>

            <!-- Event 4: Cloud Security Webinar -->
            <div class="event-card reveal" data-category="webinar">
                <div class="event-poster">
                    <i class="fas fa-cloud"></i>
                </div>
                <div class="event-info">
                    <span class="event-category webinar">Webinar</span>
                    <h3>Cloud Security Best Practices</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <i class="fas fa-calendar"></i>
                            <span>15th March 2026</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-clock"></i>
                            <span>6:00 PM - 8:00 PM</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-globe"></i>
                            <span>Online (Zoom)</span>
                        </div>
                    </div>
                    <p>
                        Learn about securing cloud infrastructure, AWS/Azure security configurations,
                        and protecting data in the cloud from industry experts.
                    </p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Register Now
                    </a>
                </div>
            </div>

            <!-- Event 5: Python Workshop -->
            <div class="event-card reveal" data-category="workshop">
                <div class="event-poster">
                    <i class="fab fa-python"></i>
                </div>
                <div class="event-info">
                    <span class="event-category workshop">Workshop</span>
                    <h3>Advanced Python Programming</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <i class="fas fa-calendar"></i>
                            <span>20th March 2026</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-clock"></i>
                            <span>10:00 AM - 3:00 PM</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Lab 3, MH Saboo Siddik</span>
                        </div>
                    </div>
                    <p>
                        Master advanced Python concepts including decorators, generators, async programming,
                        and building RESTful APIs with hands-on exercises.
                    </p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Register Now
                    </a>
                </div>
            </div>

            <!-- Event 6: AI/ML Seminar -->
            <div class="event-card reveal" data-category="seminar">
                <div class="event-poster">
                    <i class="fas fa-brain"></i>
                </div>
                <div class="event-info">
                    <span class="event-category seminar">Seminar</span>
                    <h3>AI & Machine Learning Trends</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <i class="fas fa-calendar"></i>
                            <span>28th March 2026</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-clock"></i>
                            <span>3:00 PM - 6:00 PM</span>
                        </div>
                        <div class="event-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Auditorium, MH Saboo Siddik</span>
                        </div>
                    </div>
                    <p>
                        Discover the latest trends in AI and ML, including deep learning, neural networks,
                        and practical applications in various industries.
                    </p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Register Now
                    </a>
                </div>
                        </div>
            
            <!-- Upcoming Events Overlay -->
            <div class="upcoming-overlay">
                <div class="upcoming-content">
                    <i class="fas fa-calendar-alt"></i>
                    <h2>UPCOMING</h2>
                    <p>Stay tuned for our exciting lineup of events</p>
                    <div class="pulse-ring"></div>
                </div>
            </div>
            
        </div>
        
    </div>
</section>

<?php include 'includes/footer.php'; ?>