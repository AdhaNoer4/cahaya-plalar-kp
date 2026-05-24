import Alpine from "alpinejs";
import AlpineCountUp from "@designbycode/alpine-countup";
import "./backgrounds";
import "./parallax";

Alpine.plugin(AlpineCountUp);
window.Alpine = Alpine;
Alpine.start();
