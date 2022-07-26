let preloader = document.getElementById("preloader");
if (preloader) {
    window.addEventListener("load", () => {
        preloader.style.transition = '.5s';
        preloader.style.opacity = '0';
        preloader.style.visibility = 'hidden';
    });
}

window.addEventListener("load", () => {
    x = document.querySelectorAll('.links a')
    for( let i = 1 ; i < x.length - 2 ; i++){
      window.location.pathname !== '/ar' ? x[i].href = '/'+ x[i].dataset.link : x[i].href = x[i].dataset.link ;
        x[i].addEventListener('click' , () => {
            document.querySelector('.burger').click()
        })
    }

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
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: true,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        600: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 1,
        },
    },
  });

  let scrollTopButton = document.getElementById("scroll_top");
  window.onscroll = () => {
      if (scrollY >= 430) {
          scrollTopButton.style = "left: 10px;transform: rotate(0deg);";
      } else {
          scrollTopButton.style = "left: -60px;";
      }
  };
  scrollTopButton.onclick = function () {
      window.scrollTo({
          top: 0,
          behavior: "smooth",
      });
  };
