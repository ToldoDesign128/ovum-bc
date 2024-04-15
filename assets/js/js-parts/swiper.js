// Swiper

// Sticky Post block
const swiperStickyPost = new Swiper('.swiperStickyPost', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,

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