import Alpine from "alpinejs";
import AlpineCountUp from "@designbycode/alpine-countup";
import "./parallax";

Alpine.plugin(AlpineCountUp);
window.Alpine = Alpine;
Alpine.start();

// Load Three.js particle backgrounds dynamically only on pages that use it
if (document.getElementById("three-bg-container")) {
    import("./backgrounds");
}
