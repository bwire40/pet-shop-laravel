import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// loader

window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
    const content = document.querySelector(".content");

    const delayTime = 0;
    setTimeout(function () {
        content.classList.remove("hidden");
        loader.classList.add("hidden");
    }, delayTime);
});
