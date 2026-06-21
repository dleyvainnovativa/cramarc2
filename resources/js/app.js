/*
|------------------------------------------------------------------------------
| app.js — central JS entry (Vite)
|------------------------------------------------------------------------------
| Vanilla, modular. Motion is centralized and respects prefers-reduced-motion.
| The mobile menu now drives a full-screen offcanvas via `body.menu-open`.
|----------------------------------------------------------------------------*/

import 'bootstrap';

const prefersReducedMotion =
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

/* Scroll-reveal with automatic stagger (.reveal / .reveal-group). */
function initReveal() {
    const items = document.querySelectorAll('.reveal');
    if (!items.length) return;

    if (prefersReducedMotion) {
        items.forEach((el) => el.classList.add('in'));
        return;
    }

    document.querySelectorAll('.reveal-group').forEach((group) => {
        group.querySelectorAll(':scope > .reveal').forEach((child, i) => {
            if (!child.hasAttribute('data-d')) {
                child.style.setProperty('--reveal-delay', `${i * 80}ms`);
            }
        });
    });

    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in');
                    io.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15, rootMargin: '0px 0px -8% 0px' }
    );
    items.forEach((el) => io.observe(el));
}

/* Condense the fixed nav once scrolled. */
function initNavScroll() {
    const nav = document.getElementById('site-nav');
    if (!nav) return;
    const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 20);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
}

/* Full-screen offcanvas menu. Toggles body.menu-open, locks page scroll,
   closes on link-tap or Escape. */
function initOffcanvas() {
    const burger = document.getElementById('nav-burger');
    const panel = document.getElementById('offcanvas');
    if (!burger || !panel) return;

    const setOpen = (open) => {
        document.body.classList.toggle('menu-open', open);
        document.body.style.overflow = open ? 'hidden' : '';
        burger.setAttribute('aria-expanded', String(open));
        burger.setAttribute('aria-label', open ? 'Cerrar menú' : 'Abrir menú');
        if (open) {
            // focus first link for keyboard users
            const first = panel.querySelector('.offcanvas__link');
            if (first && !prefersReducedMotion) {
                setTimeout(() => first.focus(), 300);
            } else if (first) {
                first.focus();
            }
        }
    };

    burger.addEventListener('click', () =>
        setOpen(!document.body.classList.contains('menu-open'))
    );
    panel.querySelectorAll('.offcanvas__link').forEach((link) =>
        link.addEventListener('click', () => setOpen(false))
    );
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && document.body.classList.contains('menu-open')) {
            setOpen(false);
            burger.focus();
        }
    });
}

/* Smooth-scroll for in-page anchors, offsetting the fixed nav. */
function initSmoothScroll() {
    const nav = document.getElementById('site-nav');
    const navH = nav ? nav.offsetHeight : 0;

    document.querySelectorAll('a[href^="#"]').forEach((link) => {
        const id = link.getAttribute('href');
        if (id === '#' || id.length < 2) return;

        link.addEventListener('click', (e) => {
            const target = document.querySelector(id);
            if (!target) return;
            e.preventDefault();
            const top = target.getBoundingClientRect().top + window.scrollY - navH - 12;
            window.scrollTo({ top, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
            history.replaceState(null, '', id);
        });
    });
}

/* Highlight the desktop nav link whose section is in view. */
function initActiveSection() {
    const links = Array.from(
        document.querySelectorAll('.site-nav__desktop a[href^="#"]')
    ).filter((a) => a.getAttribute('href').length > 1 && !a.classList.contains('cta'));
    if (!links.length) return;

    const map = new Map();
    links.forEach((link) => {
        const sec = document.querySelector(link.getAttribute('href'));
        if (sec) map.set(sec, link);
    });
    if (!map.size) return;

    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                const link = map.get(entry.target);
                if (link && entry.isIntersecting) {
                    links.forEach((l) => l.classList.remove('is-active'));
                    link.classList.add('is-active');
                }
            });
        },
        { threshold: 0.5 }
    );
    map.forEach((_, sec) => io.observe(sec));
}

function boot() {
    initReveal();
    initNavScroll();
    initOffcanvas();
    initSmoothScroll();
    initActiveSection();
    initLightbox(); initCountUp();
    initFaq(); initBeforeAfter(); initShowreel();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
} else {
    boot();
}

/*
|------------------------------------------------------------------------------
| app.js — ADDITIONS for brand-specific sections
|------------------------------------------------------------------------------
| Add these two functions to your existing app.js and call them in boot():
|     initLightbox();
|     initCountUp();
| Both no-op if their markup isn't on the page, so they're safe on every brand.
|----------------------------------------------------------------------------*/

/* Gallery lightbox — open on item click, arrow/Escape keys, prev/next. */
function initLightbox() {
    const items = Array.from(document.querySelectorAll('.gallery__item'));
    const box = document.getElementById('lightbox');
    if (!items.length || !box) return;

    const img = document.getElementById('lightbox-img');
    const cap = document.getElementById('lightbox-cap');
    const btnClose = document.getElementById('lightbox-close');
    const btnPrev = document.getElementById('lightbox-prev');
    const btnNext = document.getElementById('lightbox-next');
    let index = 0;
    let lastFocused = null;

    const render = () => {
        const el = items[index];
        img.src = el.dataset.full;
        img.alt = el.dataset.caption || '';
        cap.textContent = el.dataset.caption || '';
    };

    const open = (i) => {
        index = i;
        lastFocused = document.activeElement;
        render();
        box.hidden = false;
        requestAnimationFrame(() => box.classList.add('is-open'));
        document.body.style.overflow = 'hidden';
        btnClose.focus();
    };

    const close = () => {
        box.classList.remove('is-open');
        document.body.style.overflow = '';
        setTimeout(() => { box.hidden = true; img.src = ''; }, 300);
        if (lastFocused) lastFocused.focus();
    };

    const step = (dir) => { index = (index + dir + items.length) % items.length; render(); };

    items.forEach((el, i) => el.addEventListener('click', () => open(i)));
    btnClose.addEventListener('click', close);
    btnPrev.addEventListener('click', () => step(-1));
    btnNext.addEventListener('click', () => step(1));
    box.addEventListener('click', (e) => { if (e.target === box) close(); });
    document.addEventListener('keydown', (e) => {
        if (box.hidden) return;
        if (e.key === 'Escape') close();
        if (e.key === 'ArrowLeft') step(-1);
        if (e.key === 'ArrowRight') step(1);
    });
}

/* Animated count-up for .stat__value, triggered when the section scrolls in. */
function initCountUp() {
    const values = document.querySelectorAll('.stat__value[data-count]');
    if (!values.length) return;

    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const format = (n, decimals, prefix, suffix) =>
        `${prefix}${decimals ? n.toFixed(decimals) : Math.round(n).toLocaleString('es-MX')}${suffix}`;

    const run = (el) => {
        const target = parseFloat(el.dataset.count);
        const decimals = parseInt(el.dataset.decimals || '0', 10);
        const prefix = el.dataset.prefix || '';
        const suffix = el.dataset.suffix || '';

        if (reduce) { el.textContent = format(target, decimals, prefix, suffix); return; }

        const dur = 1600;
        const start = performance.now();
        const tick = (now) => {
            const p = Math.min((now - start) / dur, 1);
            const eased = 1 - Math.pow(1 - p, 3);     // easeOutCubic
            el.textContent = format(target * eased, decimals, prefix, suffix);
            if (p < 1) requestAnimationFrame(tick);
        };
        requestAnimationFrame(tick);
    };

    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) { run(entry.target); io.unobserve(entry.target); }
        });
    }, { threshold: 0.6 });

    values.forEach((el) => io.observe(el));
}

/*
|------------------------------------------------------------------------------
| app.js — ADDITIONS for extra sections
|------------------------------------------------------------------------------
| Add these to app.js and call in boot():
|     initFaq(); initBeforeAfter(); initShowreel();
| Each no-ops if its markup isn't present.
|----------------------------------------------------------------------------*/

/* FAQ — close other items when one opens (native <details> stays accessible). */
function initFaq() {
    const list = document.getElementById('faq-list');
    if (!list) return;
    const items = list.querySelectorAll('.faq-item');
    items.forEach((item) => {
        item.addEventListener('toggle', () => {
            if (item.open) {
                items.forEach((other) => { if (other !== item) other.open = false; });
            }
        });
    });
}

/* Before/After — drag the handle (pointer + touch) to wipe between images. */
function initBeforeAfter() {
    const widget = document.getElementById('ba-widget');
    const clip = document.getElementById('ba-clip');
    const handle = document.getElementById('ba-handle');
    if (!widget || !clip || !handle) return;

    let dragging = false;

    const setPos = (clientX) => {
        const rect = widget.getBoundingClientRect();
        let pct = ((clientX - rect.left) / rect.width) * 100;
        pct = Math.max(0, Math.min(100, pct));
        clip.style.width = pct + '%';
        handle.style.left = pct + '%';
    };

    const start = () => { dragging = true; widget.classList.add('is-dragging'); };
    const end = () => { dragging = false; widget.classList.remove('is-dragging'); };
    const move = (e) => {
        if (!dragging) return;
        const x = e.touches ? e.touches[0].clientX : e.clientX;
        setPos(x);
    };

    handle.addEventListener('pointerdown', start);
    window.addEventListener('pointerup', end);
    window.addEventListener('pointermove', move);
    // allow click-anywhere on the widget to jump the handle
    widget.addEventListener('pointerdown', (e) => { start(); setPos(e.clientX); });
}

/* Showreel — swap the poster button for the real iframe on click (lazy). */
function initShowreel() {
    document.querySelectorAll('.showreel__play').forEach((btn) => {
        btn.addEventListener('click', () => {
            const url = btn.dataset.embed;
            if (!url) return;
            const sep = url.includes('?') ? '&' : '?';
            const iframe = document.createElement('iframe');
            iframe.src = url + sep + 'autoplay=1';
            iframe.allow = 'autoplay; fullscreen; picture-in-picture';
            iframe.allowFullscreen = true;
            iframe.setAttribute('title', 'Showreel');
            btn.replaceWith(iframe);
        });
    });
}
