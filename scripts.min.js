// Animation

// Accordion
jQuery(document).ready(function() {
    jQuery('.faq__list__panel__title').click(function() {
        var isActive = jQuery(this).hasClass('title-active');
        
        jQuery('.faq__list__panel__text').removeClass('panel-active');
        jQuery('.faq__list__panel__title').removeClass('title-active');
        
        if (!isActive) {
            jQuery(this).next('.faq__list__panel__text').addClass('panel-active');
            jQuery(this).addClass('title-active');
        }
    });
});
// Menu
jQuery("#hamburgerButton").click(function () {
  jQuery("#hamburgerButton").toggleClass("is-active");
  jQuery("body").toggleClass("stop-scroll");
  jQuery(".navigation__button__cta > a").toggleClass("hide-cta");
  jQuery("#menu").toggleClass("open");
});

jQuery(document).ready(function() {
  jQuery(window).scroll(function() {
      var scrollPosition = jQuery(this).scrollTop();
      var windowHeight = jQuery(window).height();
      var homeCta = jQuery('#homeCta');

      if (scrollPosition > windowHeight) {
          homeCta.removeClass('button-white').addClass('button-green');
      } else {
          homeCta.removeClass('button-green').addClass('button-white');
      }
  });
});

// Swiper

// Sticky Post block
const swiperStickyPost = new Swiper('.swiperStickyPost', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Post block
const swiperPostBlock = new Swiper('.swiperPostBlock', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 60,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 100,
        },
    },

    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Category Blog
const swiperCat = new Swiper('.swiperCat', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },

    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Prima e Dopo
const swiperPrima = new Swiper('.swiperPrima', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Quote
const swiperQuote = new Swiper('.swiperQuote', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Videorecensioni block
const swiperVideo = new Swiper('.swiperVideo', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    breakpoints: {
        1280: {
            slidesPerView: 2,
        },
    },

    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Post block
const swipePostGallery= new Swiper('.swipePostGallery', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },

    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
