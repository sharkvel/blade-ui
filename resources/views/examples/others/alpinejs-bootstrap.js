import axios from "axios";
import Alpine from "alpinejs"; // [tl! highlight]

window.axios = axios;
window.Alpine = Alpine; // [tl! highlight]

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

Alpine.start(); // [tl! highlight]
