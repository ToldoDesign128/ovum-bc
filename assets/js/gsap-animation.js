// Gsap
document.addEventListener("DOMContentLoaded", function (event) {

    ScrollTrigger.defaults({
        markers: false
    });

    gsap.registerPlugin(ScrollTrigger);

    gsap.to(".tradizionale__title", {
        scrollTrigger:{
            trigger:".tradizionale__title",
            start: "top center",
            end: "bottom center",
            pin: true
        }        
    });
    gsap.to(".avanzata__title", {
        scrollTrigger:{
            trigger:".avanzata__title",
            start: "top center",
            end: "bottom center",
            pin: true
        }        
    });
});