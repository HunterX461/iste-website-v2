// ===================================
// GALLERY LIGHTBOX
// Image popup functionality
// ===================================

document.addEventListener('DOMContentLoaded', function () {

    // Create lightbox HTML
    const lightbox = document.createElement('div');
    lightbox.id = 'lightbox';
    lightbox.className = 'lightbox';
    lightbox.innerHTML = `
        <div class="lightbox-content">
            <span class="lightbox-close">&times;</span>
            <img src="" alt="Gallery Image" id="lightbox-image">
            <div class="lightbox-controls">
                <button class="lightbox-prev" aria-label="Previous image">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="lightbox-next" aria-label="Next image">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            <div class="lightbox-caption"></div>
        </div>
    `;
    document.body.appendChild(lightbox);

    // Get all gallery images
    const galleryImages = document.querySelectorAll('.gallery-item img');
    const lightboxImg = document.getElementById('lightbox-image');
    const lightboxCaption = document.querySelector('.lightbox-caption');
    const closeBtn = document.querySelector('.lightbox-close');
    const prevBtn = document.querySelector('.lightbox-prev');
    const nextBtn = document.querySelector('.lightbox-next');

    let currentIndex = 0;

    // Open lightbox
    galleryImages.forEach((img, index) => {
        img.addEventListener('click', () => {
            currentIndex = index;
            openLightbox(img);
        });
    });

    function openLightbox(img) {
        lightbox.classList.add('active');
        lightboxImg.src = img.src;
        lightboxCaption.textContent = img.alt || '';
        document.body.style.overflow = 'hidden';
    }

    // Close lightbox
    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', closeLightbox);
    }

    // Close on background click
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    // Navigation
    if (prevBtn && galleryImages.length > 0) {
        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
            openLightbox(galleryImages[currentIndex]);
        });
    }

    if (nextBtn && galleryImages.length > 0) {
        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % galleryImages.length;
            openLightbox(galleryImages[currentIndex]);
        });
    }

    // Keyboard controls
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;

        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft' && galleryImages.length > 0) {
            currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
            openLightbox(galleryImages[currentIndex]);
        } else if (e.key === 'ArrowRight' && galleryImages.length > 0) {
            currentIndex = (currentIndex + 1) % galleryImages.length;
            openLightbox(galleryImages[currentIndex]);
        }
    });
});

// ===== LIGHTBOX STYLES =====
const lightboxStyles = document.createElement('style');
lightboxStyles.textContent = `
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(10, 10, 15, 0.95);
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }
    
    .lightbox.active {
        opacity: 1;
        visibility: visible;
    }
    
    .lightbox-content {
        position: relative;
        max-width: 90%;
        max-height: 90%;
        animation: scaleIn 0.3s ease;
    }
    
    #lightbox-image {
        max-width: 100%;
        max-height: 80vh;
        border-radius: 1rem;
        box-shadow: 0 0 50px rgba(0, 243, 255, 0.3);
        border: 2px solid rgba(0, 243, 255, 0.2);
    }
    
    .lightbox-close {
        position: absolute;
        top: -40px;
        right: 0;
        font-size: 2.5rem;
        color: var(--neon-cyan);
        cursor: pointer;
        background: none;
        border: none;
        transition: all 0.3s ease;
        line-height: 1;
    }
    
    .lightbox-close:hover {
        color: var(--neon-blue);
        text-shadow: 0 0 20px var(--neon-blue);
        transform: rotate(90deg);
    }
    
    .lightbox-controls {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        transform: translateY(-50%);
        display: flex;
        justify-content: space-between;
        pointer-events: none;
    }
    
    .lightbox-prev,
    .lightbox-next {
        pointer-events: all;
        background: rgba(0, 243, 255, 0.1);
        border: 1px solid rgba(0, 243, 255, 0.3);
        color: var(--neon-cyan);
        font-size: 2rem;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .lightbox-prev:hover,
    .lightbox-next:hover {
        background: rgba(0, 243, 255, 0.2);
        box-shadow: 0 0 20px rgba(0, 243, 255, 0.5);
        transform: scale(1.1);
    }
    
    .lightbox-prev {
        margin-left: -70px;
    }
    
    .lightbox-next {
        margin-right: -70px;
    }
    
    .lightbox-caption {
        text-align: center;
        color: var(--text-secondary);
        margin-top: 1rem;
        font-size: 1.1rem;
    }
    
    @media (max-width: 768px) {
        .lightbox-prev,
        .lightbox-next {
            position: absolute;
            bottom: -60px;
        }
        
        .lightbox-prev {
            left: 50%;
            margin-left: -60px;
        }
        
        .lightbox-next {
            right: 50%;
            margin-right: -60px;
        }
        
        .lightbox-close {
            top: -50px;
        }
    }
`;
document.head.appendChild(lightboxStyles);
