import Alpine from 'alpinejs';
import mask from '@alpinejs/mask';
import ajax from '@imacrayon/alpine-ajax'
import axios from 'axios';

/**
 * Register in window object for global access
 */
window.axios = axios;
window.Alpine = Alpine;

/**
 * Config Axios
 */
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Config Alpine
 */
Alpine.plugin(mask);
Alpine.plugin(ajax);

document.addEventListener('alpine:init', () => {
    // Dark mode
    Alpine.store('darkMode', {
        on: false,
        init() {
            this.on = document.documentElement.classList.contains('dark');
        },
        toggle() {
            if (!document.startViewTransition) return this.switchTheme();
            document.startViewTransition(() => this.switchTheme());
        },
        switchTheme() {
            this.on = !this.on;

            localStorage.setItem('darkMode', this.on ? 'dark' : 'light');
        },
    });

    // Scrollbar
    Alpine.store('scrollbar', {
        get scrollbarWidth() {
            return window.innerWidth - document.documentElement.clientWidth;
        },
        lock() {
            document.body.style.setProperty('--removed-body-scroll-bar-size', this.scrollbarWidth + 'px');
            document.body.setAttribute('data-scrollbar-lock', true);
        },
        unlock() {
            document.body.removeAttribute('data-scrollbar-lock');
        }
    });

    // Scroll to fragment
    Alpine.data('fragment', () => ({
        fragment: null,
        init() {
            const fragments = [...document.querySelectorAll(`a[href^='#']`)].reverse();
            const triggerAt = 250; // PX
            function getActiveFragment() {
                return fragments
                    .find((fragment) => fragment.getBoundingClientRect().top <= triggerAt)
                    ?.getAttribute('href');
            }
            this.update(getActiveFragment());
            window.addEventListener('scroll', (e) => {
                this.update(getActiveFragment());
            });
        },
        update(val) {
            this.fragment = val;
        },
    }));
});

Alpine.start();
