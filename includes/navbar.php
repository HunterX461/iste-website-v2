<?php
// Get current page to highlight active nav item
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<style>
    /* === NAVBAR STYLES === */
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 1rem 0;
        background: rgba(10, 10, 15, 0.8);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(0, 243, 255, 0.1);
        z-index: 1000;
        transition: all 0.3s ease;
    }

    .navbar.scrolled {
        padding: 0.5rem 0;
        background: rgba(10, 10, 15, 0.95);
        box-shadow: 0 5px 20px rgba(0, 243, 255, 0.1);
    }

    .navbar .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 1rem;
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--neon-cyan);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .navbar-brand:hover {
        color: var(--neon-blue);
        text-shadow: 0 0 20px rgba(0, 243, 255, 0.8);
    }

    .brand-logo {
        height: 40px;
        width: auto;
        object-fit: contain;
        transition: all 0.3s ease;
        filter: drop-shadow(0 0 5px rgba(0, 243, 255, 0.3));
    }

    .brand-logo:first-of-type {
        margin-right: 0.75rem;
    }

    .navbar-brand:hover .brand-logo {
        filter: drop-shadow(0 0 10px rgba(0, 243, 255, 0.6));
        transform: scale(1.05);
    }


    .navbar-menu {
        display: flex;
        list-style: none;
        gap: 2rem;
        margin: 0;
        padding: 0;
    }

    .navbar-menu li {
        position: relative;
    }

    .navbar-link {
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--text-secondary);
        text-transform: uppercase;
        letter-spacing: 1px;
        text-decoration: none;
        padding: 0.5rem 0;
        position: relative;
        transition: all 0.3s ease;
    }

    .navbar-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--neon-blue), var(--neon-cyan));
        box-shadow: 0 0 10px var(--neon-blue);
        transition: width 0.3s ease;
    }

    .navbar-link:hover,
    .navbar-link.active {
        color: var(--neon-cyan);
    }

    .navbar-link:hover::after,
    .navbar-link.active::after {
        width: 100%;
    }

    /* Mobile Menu Toggle */
    .navbar-toggle {
        display: none;
        flex-direction: column;
        gap: 5px;
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 0.5rem;
    }

    .navbar-toggle span {
        width: 30px;
        height: 3px;
        background: var(--neon-cyan);
        border-radius: 3px;
        transition: all 0.3s ease;
        box-shadow: 0 0 5px var(--neon-cyan);
    }

    .navbar-toggle:hover span {
        box-shadow: 0 0 10px var(--neon-cyan);
    }

    .navbar-toggle.active span:nth-child(1) {
        transform: rotate(45deg) translate(8px, 8px);
    }

    .navbar-toggle.active span:nth-child(2) {
        opacity: 0;
    }

    .navbar-toggle.active span:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -7px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .navbar-toggle {
            display: flex;
        }

        .navbar-menu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            flex-direction: column;
            background: rgba(10, 10, 15, 0.98);
            backdrop-filter: blur(20px);
            padding: 2rem;
            gap: 1.5rem;
            border-bottom: 1px solid rgba(0, 243, 255, 0.2);
            transform: translateY(-100%);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .navbar-menu.active {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .navbar-link {
            display: block;
            padding: 0.5rem 0;
        }
    }
</style>

<nav class="navbar" id="navbar">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="assets/mhsscelogo.png" alt="MH Saboo Siddik Logo" class="brand-logo">
            <img src="assets/istelogo.png" alt="ISTE Logo" class="brand-logo">
            <span>ISTE</span>
        </a>

        <button class="navbar-toggle" id="navToggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <ul class="navbar-menu" id="navMenu">
            <li><a href="index.php"
                    class="navbar-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="about.php"
                    class="navbar-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">About</a></li>
            <li><a href="events.php"
                    class="navbar-link <?php echo ($currentPage == 'events.php') ? 'active' : ''; ?>">Events</a></li>
            <li><a href="team.php"
                    class="navbar-link <?php echo ($currentPage == 'team.php') ? 'active' : ''; ?>">Team</a></li>
            <li><a href="gallery.php"
                    class="navbar-link <?php echo ($currentPage == 'gallery.php') ? 'active' : ''; ?>">Gallery</a></li>
            <li><a href="contact.php"
                    class="navbar-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- Spacer to prevent content from hiding under fixed navbar -->
<div style="height: 80px;"></div>