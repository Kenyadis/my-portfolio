document.addEventListener('DOMContentLoaded', () => {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Theme toggle
    const themeToggle = document.getElementById('theme-toggle');
    const themeToggleMobile = document.getElementById('theme-toggle-mobile');
    const applyTheme = (theme) => {
        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        try { localStorage.setItem('theme', theme); } catch (e) {}
    };
    const getTheme = () => {
        try {
            const stored = localStorage.getItem('theme');
            if (stored) return stored;
        } catch (e) {}
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    };
    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            applyTheme(document.documentElement.classList.contains('dark') ? 'light' : 'dark');
        });
    }
    if (themeToggleMobile) {
        themeToggleMobile.addEventListener('click', () => {
            applyTheme(document.documentElement.classList.contains('dark') ? 'light' : 'dark');
        });
    }
    applyTheme(getTheme());

    const menuBtn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('menu-icon-open');
    const iconClose = document.getElementById('menu-icon-close');

    const closeMenu = () => {
        if (!menu || !menuBtn) return;
        menu.classList.remove('open');
        iconOpen?.classList.remove('hidden');
        iconClose?.classList.add('hidden');
        menuBtn.setAttribute('aria-expanded', 'false');
    };

    if (menuBtn && menu) {
        menuBtn.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('open');
            iconOpen?.classList.toggle('hidden', isOpen);
            iconClose?.classList.toggle('hidden', !isOpen);
            menuBtn.setAttribute('aria-expanded', String(isOpen));
        });

        // Close menu when a link is clicked
        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Close menu with Escape and return focus to the toggle
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && menu.classList.contains('open')) {
                closeMenu();
                menuBtn.focus();
            }
        });

        // Close menu when clicking outside of it
        document.addEventListener('click', (event) => {
            if (!menu.classList.contains('open')) return;
            if (menu.contains(event.target) || menuBtn.contains(event.target)) return;
            closeMenu();
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

    // Scroll progress bar + back-to-top visibility
    const progressBar = document.getElementById('scroll-progress-bar');
    const backToTop = document.getElementById('back-to-top');

    const updateScrollUi = () => {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const scrollable = document.documentElement.scrollHeight - window.innerHeight;
        const progress = scrollable > 0 ? Math.min(scrollTop / scrollable, 1) : 0;

        if (progressBar) {
            progressBar.style.transform = `scaleX(${progress})`;
        }

        if (backToTop) {
            backToTop.hidden = scrollTop <= 400;
        }
    };

    let scrollFrame = null;
    window.addEventListener('scroll', () => {
        if (scrollFrame !== null) return;
        scrollFrame = window.requestAnimationFrame(() => {
            updateScrollUi();
            scrollFrame = null;
        });
    }, { passive: true });
    updateScrollUi();

    backToTop?.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
    });

    // Copy-to-clipboard with toast feedback
    const toast = document.getElementById('toast');
    let toastTimer = null;

    const showToast = (message) => {
        if (!toast) return;
        toast.textContent = message;
        toast.classList.add('is-visible');
        window.clearTimeout(toastTimer);
        toastTimer = window.setTimeout(() => toast.classList.remove('is-visible'), 2200);
    };

    const copyToClipboard = async (text) => {
        if (navigator.clipboard && window.isSecureContext) {
            await navigator.clipboard.writeText(text);
            return;
        }

        const helper = document.createElement('textarea');
        helper.value = text;
        helper.setAttribute('readonly', '');
        helper.style.position = 'fixed';
        helper.style.opacity = '0';
        document.body.appendChild(helper);
        helper.select();
        document.execCommand('copy');
        helper.remove();
    };

    document.querySelectorAll('[data-copy]').forEach(button => {
        button.addEventListener('click', async () => {
            const value = button.getAttribute('data-copy');
            const label = button.getAttribute('data-copy-label') || 'Text';
            if (!value) return;

            try {
                await copyToClipboard(value);
                showToast(`${label} copied to clipboard`);
            } catch {
                showToast('Could not copy. Please copy it manually.');
            }
        });
    });

    // Repository search/filter
    const repoSearch = document.getElementById('repo-search');
    const repoItems = Array.from(document.querySelectorAll('[data-repo-item]'));
    const repoNoResults = document.getElementById('repo-no-results');

    if (repoSearch && repoItems.length) {
        const filterRepos = () => {
            const query = repoSearch.value.trim().toLowerCase();
            let visibleCount = 0;

            repoItems.forEach(item => {
                const haystack = (item.getAttribute('data-repo-search') || item.textContent || '').toLowerCase();
                const matches = query === '' || haystack.includes(query);
                item.hidden = !matches;
                if (matches) visibleCount += 1;
            });

            if (repoNoResults) {
                repoNoResults.hidden = visibleCount !== 0;
            }
        };

        repoSearch.addEventListener('input', filterRepos);
        filterRepos();
    }

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
