<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<style>
    .gallery-grid {
        column-count: 3;
        column-gap: 1.5rem;
    }

    .gallery-item {
        break-inside: avoid;
        margin-bottom: 1.5rem;
        position: relative;
        overflow: hidden;
        border-radius: var(--radius-md);
        cursor: pointer;
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        transition: all 0.3s ease;
    }

    .gallery-item:hover {
        border-color: var(--neon-cyan);
        box-shadow: 0 0 30px rgba(0, 255, 245, 0.4);
        transform: scale(1.02);
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        display: flex;
        align-items: flex-end;
        padding: 1rem;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-caption {
        color: var(--text-primary);
        font-size: 0.95rem;
        font-weight: 600;
    }

    .gallery-category {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        background: rgba(0, 243, 255, 0.2);
        border: 1px solid var(--neon-cyan);
        border-radius: 50px;
        color: var(--neon-cyan);
        font-size: 0.75rem;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .gallery-grid {
            column-count: 2;
        }
    }

    @media (max-width: 768px) {
        .gallery-grid {
            column-count: 1;
        }
    }
</style>

<!-- PAGE HEADER -->
<div class="page-header">
    <div class="container">
        <h1 class="fade-in-down">Gallery</h1>
        <p class="fade-in-up">Capturing moments of innovation, learning, and collaboration</p>
    </div>
</div>

<!-- GALLERY SECTION -->
<section class="section">
    <div class="container">

        <div class="gallery-grid">

            <!-- Gallery Item 1 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event1.jpg" alt="Workshop Session"
                    onerror="this.src='https://via.placeholder.com/400x300/0D1117/00f3ff?text=Workshop+Session'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Workshop</span>
                        <p class="gallery-caption">Web Development Workshop 2025</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event2.jpg" alt="Hackathon"
                    onerror="this.src='https://via.placeholder.com/400x500/0D1117/b000ff?text=Hackathon'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Hackathon</span>
                        <p class="gallery-caption">24-Hour Coding Challenge</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event3.jpg" alt="Seminar"
                    onerror="this.src='https://via.placeholder.com/400x350/0D1117/00fff5?text=Seminar'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Seminar</span>
                        <p class="gallery-caption">Cybersecurity Awareness Talk</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event4.jpg" alt="Team Photo"
                    onerror="this.src='https://via.placeholder.com/400x400/0D1117/00ff88?text=Team+Photo'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Team</span>
                        <p class="gallery-caption">ISTE Core Team 2025</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event5.jpg" alt="IoT Project"
                    onerror="this.src='https://via.placeholder.com/400x450/0D1117/ff00ff?text=IoT+Project'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Project</span>
                        <p class="gallery-caption">Smart Home IoT Demo</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event6.jpg" alt="Guest Lecture"
                    onerror="this.src='https://via.placeholder.com/400x300/0D1117/00f3ff?text=Guest+Lecture'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Lecture</span>
                        <p class="gallery-caption">Industry Expert Session</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event7.jpg" alt="Prize Distribution"
                    onerror="this.src='https://via.placeholder.com/400x400/0D1117/b000ff?text=Winners'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Event</span>
                        <p class="gallery-caption">Hackathon Winners</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event8.jpg" alt="Coding Session"
                    onerror="this.src='https://via.placeholder.com/400x350/0D1117/00fff5?text=Coding+Session'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Workshop</span>
                        <p class="gallery-caption">Python Programming Bootcamp</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 9 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event9.jpg" alt="Blockchain Workshop"
                    onerror="this.src='https://via.placeholder.com/400x500/0D1117/00ff88?text=Blockchain'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Workshop</span>
                        <p class="gallery-caption">Blockchain Technology Session</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 10 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event10.jpg" alt="Networking Event"
                    onerror="this.src='https://via.placeholder.com/400x300/0D1117/ff00ff?text=Networking'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Event</span>
                        <p class="gallery-caption">Alumni Meetup</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 11 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event11.jpg" alt="Lab Session"
                    onerror="this.src='https://via.placeholder.com/400x400/0D1117/00f3ff?text=Lab+Work'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Workshop</span>
                        <p class="gallery-caption">Hardware Lab Session</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 12 -->
            <div class="gallery-item reveal">
                <img src="assets/images/placeholder-gallery/event12.jpg" alt="Event Planning"
                    onerror="this.src='https://via.placeholder.com/400x350/0D1117/b000ff?text=Planning'">
                <div class="gallery-overlay">
                    <div>
                        <span class="gallery-category">Team</span>
                        <p class="gallery-caption">Event Planning Session</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Include gallery.js for lightbox functionality -->
<script src="assets/js/gallery.js"></script>

<?php include 'includes/footer.php'; ?>