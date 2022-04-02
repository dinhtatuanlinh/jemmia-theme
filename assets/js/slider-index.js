window.onload = function() {
    // product images slider
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 0,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
    // end product images slider
    var swiper_container = new Swiper('.img-banner ', {
        pagination: {
            el: '.swiper-pagination ',
            dynamicBullets: true,

        },
        // effect: 'coverflow ',
        // grabCursor: true,
        // centeredSlides: true,
        // slidesPerView: 'auto ',
        // loop: true,
        // coverflowEffect: {
        //     rotate: 50,
        //     stretch: 0,
        //     depth: 100,
        //     modifier: 1,
        //     slideShadows: true,
        // },
        autoplay: {
            delay: 5000,
        },
    });
    var spv;
    if (window.innerWidth < 700) {
        spv = 2;
    } else {
        spv = 3;
    }

    var hd_prds_swiper = new Swiper('.hd-products ', {
        slidesPerView: spv,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination ',
            dynamicBullets: true,
            clickable: true,
        },

        autoplay: {
            delay: 5000,
        },
    });
    var prdpv;
    var space;
    if (window.innerWidth < 600) {
        prdpv = 2;
    } else if (600 <= window.innerWidth && window.innerWidth < 1100) {
        prdpv = 3;

    } else if (window.innerWidth >= 1100) {
        prdpv = 4;
    }

    if (window.innerWidth < 1100) {
        space = 10;
    } else {
        space = 10;
    }
    var cat_products = new Swiper('.cat-products ', {
        slidesPerView: prdpv,
        spaceBetween: space,
        // pagination: {
        //     el: '.swiper-pagination ',
        //     dynamicBullets: true,
        //     clickable: true,
        // },

        autoplay: {
            delay: 5000,
        },
    });
    var bpv;
    if (window.innerWidth < 600) {
        bpv = 1;
    } else if (window.innerWidth >= 600 && window.innerWidth < 1100) {
        bpv = 2;
    } else if (window.innerWidth >= 1100) {
        bpv = 3;
    }
    var blog_wrapper = new Swiper('.blog-wrapper ', {
        slidesPerView: bpv,
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination ',
            dynamicBullets: true,
            clickable: true,
        },

        autoplay: {
            delay: 5000,
        },
    });
    if (window.innerWidth < 600) {
        ms3 = 4;
        spc = 2;
        dl = 60000;
    } else if (window.innerWidth >= 600 && window.innerWidth < 1100) {
        ms3 = 4;
        spc = 1;
        dl = 5000;
    } else if (window.innerWidth >= 1100) {
        ms3 = 6;
        spc = 1;
        dl = 5000;
    }
    var swiper3 = new Swiper('.mySwiper3', {
        slidesPerView: ms3,
        spaceBetween: 10,
        slidesPerColumn: spc,
        pagination: {
            el: '.swiper-pagination ',
            dynamicBullets: true,
            clickable: true,
        },
        autoplay: {
            delay: dl,
        },
    });
    // slide detail product
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true,
        loopedSlides: 4
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true,
        loop: true,
        loopedSlides: 4
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;
    // end slide detail product

};