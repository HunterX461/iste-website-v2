// ===================================
// MAIN JAVASCRIPT
// Core functionality and interactions
// ===================================

document.addEventListener('DOMContentLoaded', function () {

    // ===== NAVBAR SCROLL EFFECT =====
    const navbar = document.getElementById('navbar');
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');

    // Add scrolled class on scroll with throttling
    let scrollTimeout;
    let lastScroll = 0;
    window.addEventListener('scroll', () => {
        const now = Date.now();
        if (now - lastScroll < 100) return;
        lastScroll = now;

        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    if (navToggle) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking a link
        const navLinks = document.querySelectorAll('.navbar-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    }


    // ===== SMOOTH SCROLL =====
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


    // ===== SCROLL REVEAL ANIMATIONS =====
    const revealElements = document.querySelectorAll('.reveal');

    const revealOnScroll = () => {
        const windowHeight = window.innerHeight;

        revealElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const revealPoint = 100;

            if (elementTop < windowHeight - revealPoint) {
                element.classList.add('active');
            }
        });
    };

    if (revealElements.length > 0) {
        let revealTimeout;
        let lastRevealScroll = 0;
        window.addEventListener('scroll', () => {
            const now = Date.now();
            if (now - lastRevealScroll < 150) return;
            lastRevealScroll = now;
            revealOnScroll();
        });
        revealOnScroll(); // Check on load
    }


    // ===== TYPING EFFECT (if element exists) =====
    const typingElement = document.querySelector('.typing-effect');
    if (typingElement) {
        const text = typingElement.getAttribute('data-text') || typingElement.textContent;
        typingElement.textContent = '';
        let charIndex = 0;

        function typeWriter() {
            if (charIndex < text.length) {
                typingElement.textContent += text.charAt(charIndex);
                charIndex++;
                setTimeout(typeWriter, 100);
            }
        }

        // Start typing after a delay
        setTimeout(typeWriter, 500);
    }


    // ===== LOADING ANIMATION TRIGGER =====
    window.addEventListener('load', () => {
        document.body.classList.add('loaded');
    });


    // ===== EVENT FILTER (for events page) =====
    const filterButtons = document.querySelectorAll('.filter-btn');
    const eventCards = document.querySelectorAll('.event-card');

    if (filterButtons.length > 0 && eventCards.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.getAttribute('data-filter');

                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Filter events
                eventCards.forEach(card => {
                    const category = card.getAttribute('data-category');

                    if (filter === 'all' || category === filter) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }


    // ===== FORM VALIDATION & SUBMISSION =====
    const contactForm = document.getElementById('contactForm');

    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(contactForm);

            // Simple validation
            const name = formData.get('name');
            const email = formData.get('email');
            const message = formData.get('message');

            if (!name || !email || !message) {
                showMessage('Please fill in all fields', 'error');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showMessage('Please enter a valid email address', 'error');
                return;
            }

            // Submit form (this will be handled by PHP)
            fetch('contact.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showMessage(data.message || 'Message sent successfully!', 'success');
                        contactForm.reset();
                    } else {
                        showMessage(data.message || 'Failed to send message', 'error');
                    }
                })
                .catch(error => {
                    showMessage('An error occurred. Please try again.', 'error');
                });
        });
    }


    // ===== MESSAGE DISPLAY =====
    function showMessage(text, type) {
        // Remove existing messages
        const existing = document.querySelector('.form-message');
        if (existing) existing.remove();

        const message = document.createElement('div');
        message.className = `form-message ${type}`;
        message.innerHTML = `
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
            <span>${text}</span>
        `;

        contactForm.appendChild(message);

        // Auto remove after 5 seconds
        setTimeout(() => {
            message.style.opacity = '0';
            setTimeout(() => message.remove(), 300);
        }, 5000);
    }


    // ===== COUNT UP ANIMATION (if stats exist) =====
    const counters = document.querySelectorAll('.counter');

    if (counters.length > 0) {
        const countUp = (element) => {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    element.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target;
                }
            };

            updateCounter();
        };

        // Trigger on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    countUp(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => observer.observe(counter));
    }

});

// ===== FORM MESSAGE STYLES =====
const formMessageStyles = document.createElement('style');
formMessageStyles.textContent = `
    .form-message {
        margin-top: 1rem;
        padding: 1rem;
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1rem;
        transition: opacity 0.3s ease;
    }
    
    .form-message.success {
        background: rgba(0, 255, 136, 0.1);
        border: 1px solid rgba(0, 255, 136, 0.3);
        color: #00ff88;
    }
    
    .form-message.error {
        background: rgba(255, 0, 136, 0.1);
        border: 1px solid rgba(255, 0, 136, 0.3);
        color: #ff0088;
    }
    
    .form-message i {
        font-size: 1.2rem;
    }
`;
document.head.appendChild(formMessageStyles);
