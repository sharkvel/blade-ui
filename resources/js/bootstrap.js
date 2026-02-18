import Alpine from "alpinejs";
import mask from '@alpinejs/mask'
import axios from "axios";

window.axios = axios;
window.Alpine = Alpine;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

document.addEventListener("alpine:init", () => {
    Alpine.store("darkMode", {
        on: false,
        init() {
            this.on = document.documentElement.classList.contains("dark");
        },
        toggle() {
            if (!document.startViewTransition) return this.switchTheme();
            document.startViewTransition(() => this.switchTheme());
        },
        switchTheme() {
            this.on = !this.on;

            localStorage.setItem("darkMode", this.on ? "dark" : "light");
        },
    });
    Alpine.data("fragment", () => ({
        fragment: null,
        init() {
            const fragments = [...document.querySelectorAll(`a[href^='#']`)].reverse();
            const triggerAt = 250; // Percentage
            function getActiveFragment() {
                return fragments.find((fragment) => fragment.getBoundingClientRect().top <= triggerAt)?.getAttribute("href");
            }
            this.update(getActiveFragment());
            window.addEventListener("scroll", (e) => {
                this.update(getActiveFragment());
            });
        },
        update(val) {
            this.fragment = val;
        },
    }));

    Alpine.data('scrollbar', () => ({
        // thumb geometry
        ty: 0, th: 40,   // top,  height  (vertical)
        tx: 0, tw: 40,   // left, width   (horizontal)

        // drag state
        drag: null,  // 'y' | 'x' | null
        startMouse: 0, startScroll: 0,

        init() {
            this.$nextTick(() => this.update());
            new ResizeObserver(() => this.update()).observe(this.$refs.host);
            window.addEventListener('mousemove', e => this.onMove(e));
            window.addEventListener('mouseup', () => this.drag = null);
        },

        update() {
            const h = this.$refs.host;
            const ty = this.$refs.trackY, tx = this.$refs.trackX;

            // vertical
            const ratioY = h.clientHeight / h.scrollHeight;
            this.th = Math.max(24, ratioY * ty.clientHeight);
            this.ty = (h.scrollTop / (h.scrollHeight - h.clientHeight)) * (ty.clientHeight - this.th) || 0;

            // horizontal
            const ratioX = h.clientWidth / h.scrollWidth;
            this.tw = Math.max(24, ratioX * tx.clientWidth);
            this.tx = (h.scrollLeft / (h.scrollWidth - h.clientWidth)) * (tx.clientWidth - this.tw) || 0;
        },

        // native scroll → move thumbs
        onScroll() { this.update(); },

        // thumb drag start
        startDrag(axis, e) {
            this.drag = axis;
            this.startMouse = axis === 'y' ? e.clientY : e.clientX;
            this.startScroll = axis === 'y' ? this.$refs.host.scrollTop : this.$refs.host.scrollLeft;
            e.preventDefault();
        },

        // thumb drag move
        onMove(e) {
            if (!this.drag) return;
            const h = this.$refs.host;
            const axis = this.drag;
            const track = axis === 'y' ? this.$refs.trackY : this.$refs.trackX;
            const thumb = axis === 'y' ? this.th : this.tw;
            const delta = (axis === 'y' ? e.clientY : e.clientX) - this.startMouse;
            const maxTrack = (axis === 'y' ? track.clientHeight : track.clientWidth) - thumb;
            const maxScroll = axis === 'y' ? h.scrollHeight - h.clientHeight : h.scrollWidth - h.clientWidth;
            const newScroll = this.startScroll + (delta / maxTrack) * maxScroll;
            if (axis === 'y') h.scrollTop = Math.max(0, Math.min(maxScroll, newScroll));
            else h.scrollLeft = Math.max(0, Math.min(maxScroll, newScroll));
            e.preventDefault();
        },

        // track click → jump
        jumpY(e) {
            const h = this.$refs.host, t = this.$refs.trackY;
            const ratio = (e.clientY - t.getBoundingClientRect().top - this.th / 2) / (t.clientHeight - this.th);
            h.scrollTop = Math.max(0, Math.min(1, ratio)) * (h.scrollHeight - h.clientHeight);
        },
        jumpX(e) {
            const h = this.$refs.host, t = this.$refs.trackX;
            const ratio = (e.clientX - t.getBoundingClientRect().left - this.tw / 2) / (t.clientWidth - this.tw);
            h.scrollLeft = Math.max(0, Math.min(1, ratio)) * (h.scrollWidth - h.clientWidth);
        }
    }))
});
Alpine.plugin(mask);
Alpine.start();
