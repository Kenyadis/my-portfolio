document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('menu-icon-open');
    const iconClose = document.getElementById('menu-icon-close');

    if (menuBtn && menu) {
        menuBtn.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('open');
            iconOpen?.classList.toggle('hidden', isOpen);
            iconClose?.classList.toggle('hidden', !isOpen);
        });

        // Close menu when a link is clicked
        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.remove('open');
                iconOpen?.classList.remove('hidden');
                iconClose?.classList.add('hidden');
            });
        });
    }

    // Scroll-based nav link highlighting
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    link.classList.toggle('active', link.getAttribute('href') === `#${entry.target.id}`);
                });
            }
        });
    }, { rootMargin: '-40% 0px -55% 0px' });

    sections.forEach(section => observer.observe(section));

    // Reveal-on-scroll for elements with .reveal
    const revealElements = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window && revealElements.length) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        revealElements.forEach(el => revealObserver.observe(el));
    } else {
        // Fallback: show everything immediately
        revealElements.forEach(el => el.classList.add('visible'));
    }

    // Timeline illumination: light up the Education line when it enters the viewport
    const timeline = document.getElementById('education-timeline');
    if (timeline && 'IntersectionObserver' in window) {
        const tlObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    timeline.classList.add('illuminated');
                    tlObserver.unobserve(timeline);
                }
            });
        }, { threshold: 0.2 });
        tlObserver.observe(timeline);
    }

    // Background particles — only for users who don't prefer reduced motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const particleField = document.getElementById('particle-field');

    if (particleField && !prefersReducedMotion) {
        const isMobile = window.innerWidth <= 640;
        // Fewer particles on mobile for performance
        const count = isMobile ? 12 : 26;
        const fragment = document.createDocumentFragment();

        for (let i = 0; i < count; i++) {
            const span = document.createElement('span');
            const size = Math.random() * 2.4 + 1.2;
            const left = Math.random() * 100;
            const duration = Math.random() * 14 + 12;
            const delay = -(Math.random() * duration); // start mid-animation
            const opacity = Math.random() * 0.5 + 0.4;

            span.style.cssText =
                `left: ${left}%;` +
                `width: ${size}px; height: ${size}px;` +
                `animation-duration: ${duration.toFixed(1)}s;` +
                `animation-delay: ${delay.toFixed(1)}s;` +
                `opacity: ${opacity.toFixed(2)};`;

            fragment.appendChild(span);
        }

        particleField.appendChild(fragment);
    }
});
