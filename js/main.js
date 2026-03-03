/**
 * OpenFlexure ITB - Main JavaScript
 * Handles: gallery slider, mobile menu, docs sidebar, smooth scroll, active links
 */

document.addEventListener('DOMContentLoaded', () => {

    // ===========================
    // 1. MOBILE NAVIGATION TOGGLE
    // ===========================
    const mobileToggle = document.getElementById('mobileToggle');
    const navMenu = document.getElementById('navMenu');

    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', () => {
            const isOpen = navMenu.classList.toggle('nav-open');
            mobileToggle.classList.toggle('active', isOpen);
            mobileToggle.setAttribute('aria-expanded', isOpen);
        });

        // Close on outside click
        document.addEventListener('click', (e) => {
            if (!mobileToggle.contains(e.target) && !navMenu.contains(e.target)) {
                navMenu.classList.remove('nav-open');
                mobileToggle.classList.remove('active');
            }
        });

        // Close on nav link click (mobile)
        navMenu.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('nav-open');
                mobileToggle.classList.remove('active');
            });
        });
    }


    // ===========================
    // 2. DOCS SIDEBAR TOGGLE
    // ===========================
    const navToggles = document.querySelectorAll('.docs-nav-toggle');

    navToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const list = toggle.nextElementSibling;
            const isActive = toggle.classList.contains('active');

            // Close all
            navToggles.forEach(t => {
                t.classList.remove('active');
                if (t.nextElementSibling) t.nextElementSibling.classList.remove('active');
            });

            // Open clicked (if was closed)
            if (!isActive) {
                toggle.classList.add('active');
                if (list) list.classList.add('active');
            }
        });
    });


    // ===========================
    // 3. GALLERY SLIDER
    // ===========================
    const gallerySlider = document.querySelector('.gallery-slider');

    if (gallerySlider) {
        const slides = gallerySlider.querySelectorAll('.gallery-slide');
        const prevBtn = gallerySlider.querySelector('.gallery-nav.prev');
        const nextBtn = gallerySlider.querySelector('.gallery-nav.next');
        let current = 0;
        let autoplayTimer = null;

        // Gallery data - extend this array to add more slides
        const galleryData = [
            {
                caption: 'Hasil citra mikroskopis sampel dahak (Sputum Smear) yang menunjukkan keberadaan basil TBC merah (Ziehl-Neelsen stain).',
                imageSrc: './assets/images/preparat1.jpg', 
                alt: 'Contoh citra Ziehl-Neelsen stain'
            },
            {
                // Slide 2: Menggunakan image_3.png (yang ada jarum penunjuk)
                caption: 'Visualisasi gerak presisi sub-mikrometer pada sumbu X dan Y, memungkinkan pemindaian otomatis area preparat.',
                imageSrc: './assets/images/preparat2.jpg',
                alt: 'Visualisasi gerak presisi dengan penunjuk'
            },
            {
                // Slide 3: Saya gunakan image_2.png lagi sebagai contoh karena Anda hanya memberi 2 gambar.
                // Silakan ganti dengan gambar gearbox yang asli jika ada.
                caption: 'Komponen mekanis gearbox 1/80 yang memungkinkan resolusi gerak sangat halus untuk positioning akurat.',
                imageSrc: './assets/images/preparat3.jpg', 
                alt: 'Komponen mekanis gearbox'
            }
        ];

        function buildSlides() {
            const track = gallerySlider.querySelector('.gallery-track');
            if (!track) return;
            track.innerHTML = '';
            galleryData.forEach((data, i) => {
                const slide = document.createElement('div');
                slide.className = 'gallery-slide' + (i === 0 ? ' active' : '');
                slide.style.display = i === 0 ? 'flex' : 'none';
                slide.innerHTML = `
                    <div class="gallery-image">
                    <img src="${data.imageSrc}" alt="${data.alt}">
                    </div>
                    <p class="gallery-caption">${data.caption}</p>
                    `;
                track.appendChild(slide);
            });
        }

        function goToSlide(index) {
            const allSlides = gallerySlider.querySelectorAll('.gallery-slide');
            if (!allSlides.length) return;

            allSlides[current].style.display = 'none';
            allSlides[current].classList.remove('active');

            current = (index + galleryData.length) % galleryData.length;

            allSlides[current].style.display = 'flex';
            allSlides[current].classList.add('active');
        }

        function startAutoplay() {
            autoplayTimer = setInterval(() => goToSlide(current + 1), 4000);
        }

        function stopAutoplay() {
            clearInterval(autoplayTimer);
        }

        if (slides.length <= 1) {
            buildSlides();
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                stopAutoplay();
                goToSlide(current - 1);
                startAutoplay();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                stopAutoplay();
                goToSlide(current + 1);
                startAutoplay();
            });
        }

        // Keyboard navigation
        gallerySlider.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') { stopAutoplay(); goToSlide(current - 1); startAutoplay(); }
            if (e.key === 'ArrowRight') { stopAutoplay(); goToSlide(current + 1); startAutoplay(); }
        });

        startAutoplay();
    }


    // ===========================
    // 4. SMOOTH SCROLL
    // ===========================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const targetId = anchor.getAttribute('href');
            if (targetId === '#') return;
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const navHeight = document.querySelector('.navbar')?.offsetHeight || 80;
                const top = target.getBoundingClientRect().top + window.scrollY - navHeight - 16;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });


    // ===========================
    // 5. DOCS ACTIVE LINK ON SCROLL
    // ===========================
    const docsSidebarLinks = document.querySelectorAll('.docs-nav-list a[href^="#"]');

    if (docsSidebarLinks.length) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    docsSidebarLinks.forEach(link => {
                        link.classList.toggle(
                            'active',
                            link.getAttribute('href') === '#' + entry.target.id
                        );
                    });
                }
            });
        }, { rootMargin: '-100px 0px -60% 0px', threshold: 0 });

        docsSidebarLinks.forEach(link => {
            const target = document.querySelector(link.getAttribute('href'));
            if (target) observer.observe(target);
        });
    }


    // ===========================
    // 6. DOCS SEARCH FILTER (Downloads)
    // ===========================
    const searchInput = document.querySelector('.search-input');
    const tableRows = document.querySelectorAll('.table-row');

    if (searchInput && tableRows.length) {
        searchInput.addEventListener('input', () => {
            const query = searchInput.value.toLowerCase().trim();
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(query) ? '' : 'none';
            });
        });
    }


    // ===========================
    // 7. FADE-IN ON SCROLL
    // ===========================
    const fadeEls = document.querySelectorAll('.feature-card, .team-member-card, .docs-step');

    if (fadeEls.length && 'IntersectionObserver' in window) {
        fadeEls.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        });

        const fadeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    fadeObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        fadeEls.forEach(el => fadeObserver.observe(el));
    }

});
