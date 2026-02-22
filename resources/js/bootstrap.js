import Alpine from 'alpinejs';
import mask from '@alpinejs/mask';
import axios from 'axios';

window.axios = axios;
window.Alpine = Alpine;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

document.addEventListener('alpine:init', () => {
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
    Alpine.data('fragment', () => ({
        fragment: null,
        init() {
            const fragments = [...document.querySelectorAll(`a[href^='#']`)].reverse();
            const triggerAt = 250; // Percentage
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
Alpine.plugin(mask);
Alpine.start();
