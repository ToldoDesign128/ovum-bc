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

// Post block
const swiperPostBlock = new Swiper('.swiperPostBlock', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,

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

// Prima e Dopo
const swiperPrima = new Swiper('.swiperPrima', {
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