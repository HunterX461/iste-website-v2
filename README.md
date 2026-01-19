# ISTE Student Chapter Website 🚀

<div align="center">

![ISTE Logo](assets/istelogo.png)

**Official website for ISTE Student Chapter**  
*Department of Computer Science & Engineering (IoT, Cybersecurity & Blockchain)*  
*MH Saboo Siddik College of Engineering*

[![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=flat&logo=php&logoColor=white)](https://www.php.net/)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=flat&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![CSS3](https://img.shields.io/badge/CSS3-Modern-1572B6?style=flat&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

[Live Demo](#) • [Report Bug](https://github.com/MohammedAdilSayyed/iste-website/issues) • [Request Feature](https://github.com/MohammedAdilSayyed/iste-website/issues)

</div>

---

## 📋 Table of Contents

- [About](#about)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Getting Started](#getting-started)
- [Project Structure](#project-structure)
- [Performance](#performance)
- [Screenshots](#screenshots)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

---

## 🎯 About

A modern, **cyber-themed** website designed for the ISTE Student Chapter at MH Saboo Siddik College of Engineering. The website showcases our focus on cutting-edge technologies including IoT, Cybersecurity, and Blockchain, featuring:

- Dynamic particle background effects
- Neon-themed glassmorphic UI
- Smooth scroll animations
- Event management system
- Contact form with validation
- Fully responsive design

---

## ✨ Features

### 🎨 Design & UX
- **Cyber-Themed Aesthetics**: Neon gradients, glassmorphism, and futuristic design elements
- **Particle.js Background**: Dynamic animated particles with WebGL optimization
- **Smooth Animations**: Scroll-triggered reveal animations and hover effects
- **Responsive Layout**: Mobile-first design that works on all devices

### 📱 Pages
- **Home**: Hero section with call-to-action, domain showcases, and event previews
- **About**: Chapter information, mission, vision, and team details
- **Events**: Upcoming events with filterable categories and registration links
- **Team**: Team member profiles with social links
- **Gallery**: Photo gallery from past events
- **Contact**: Contact form with client-side validation

### ⚡ Performance Optimizations
- Throttled scroll event handlers (100-150ms)
- Debounced resize handlers
- Optimized particle rendering (50 particles, O(n²) optimization)
- CSS `will-change` hints for GPU acceleration
- **0 long tasks** - No main thread blocking

---

## 🛠️ Tech Stack

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with custom properties, flexbox, and grid
- **JavaScript (ES6+)** - Vanilla JS for interactions
- **Font Awesome** - Icon library
- **Google Fonts** - Orbitron & Rajdhani typefaces

### Backend
- **PHP 8.0+** - Server-side rendering and form handling
- **Built-in PHP Server** - For local development

### Libraries & Frameworks
- **Particles.js** (Custom) - Canvas-based particle system
- **Intersection Observer API** - Scroll animations

---

## 🚀 Getting Started

### Prerequisites

- PHP 8.0 or higher
- Modern web browser (Chrome, Firefox, Edge, Safari)
- Git

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/MohammedAdilSayyed/iste-website.git
   cd iste-website
   ```

2. **Start the PHP development server**
   ```bash
   php -S localhost:8000
   ```

3. **Open your browser**
   ```
   http://localhost:8000
   ```

That's it! The website should now be running locally.

---

## 📁 Project Structure

```
iste-website/
├── assets/
│   ├── css/
│   │   ├── cyber.css          # Main cyber-themed styles
│   │   └── animations.css     # Animation definitions
│   ├── js/
│   │   ├── main.js           # Core JavaScript functionality
│   │   └── particles.js      # Particle system
│   ├── istelogo.png          # ISTE logo
│   └── mhsscelogo.png        # College logo
├── includes/
│   ├── header.php            # Common header
│   ├── navbar.php            # Navigation bar
│   └── footer.php            # Common footer
├── index.php                 # Homepage
├── about.php                 # About page
├── events.php                # Events page
├── team.php                  # Team page
├── gallery.php               # Gallery page
├── contact.php               # Contact page
└── README.md                 # This file
```

---

## ⚡ Performance

The website is optimized for maximum performance:

| Metric | Result | Status |
|--------|--------|--------|
| **Long Tasks** | 0 | ✅ Excellent |
| **First Contentful Paint** | < 1s | ✅ Fast |
| **Time to Interactive** | < 2s | ✅ Excellent |
| **Lighthouse Score** | 90+ | ✅ High |

### Optimization Techniques
- Particle count optimized (80 → 50)
- Scroll event throttling (100-150ms)
- Debounced resize handlers
- CSS `will-change` for GPU acceleration
- Removed expensive shadow blur operations
- Connection distance reduced (120px → 100px)

---

## 📸 Screenshots

### Homepage
![Homepage Hero Section](docs/screenshots/homepage.png)

### Events Page
![Events with UPCOMING Overlay](docs/screenshots/events.png)

### Contact Page
![Contact Form](docs/screenshots/contact.png)

---

## 🤝 Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📄 License

Distributed under the MIT License. See `LICENSE` for more information.

---

## 📞 Contact

**ISTE Student Chapter - MH Saboo Siddik**

- Website: [Coming Soon]
- Email: iste@mhssce.ac.in
- GitHub: [@MohammedAdilSayyed](https://github.com/MohammedAdilSayyed)

**Project Link**: [https://github.com/MohammedAdilSayyed/iste-website](https://github.com/MohammedAdilSayyed/iste-website)

---

## 🙏 Acknowledgments

- [Font Awesome](https://fontawesome.com) for icons
- [Google Fonts](https://fonts.google.com) for typography
- [Particles.js](https://vincentgarreau.com/particles.js/) for inspiration
- ISTE Student Chapter members for feedback and support

---

<div align="center">

Made with ❤️ by the ISTE Student Chapter Team

**[⬆ Back to Top](#iste-student-chapter-website-)**

</div>
