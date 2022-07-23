let preloader = document.getElementById("preloader");
if (preloader) {
    window.addEventListener("load", () => {
        preloader.remove();
    });
}

window.addEventListener("load", () => {
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false,
    });
});

$(".owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
  });

