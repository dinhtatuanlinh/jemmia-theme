var swiper = new Swiper('.swiper-container ', {
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
    console.log('abce ')
} else if (window.innerWidth >= 1100) {
    prdpv = 4;
}

if (window.innerWidth < 1100) {
    space = 10;
} else {
    space = 30;
}
var cat_products = new Swiper('.cat-products ', {
    slidesPerView: prdpv,
    spaceBetween: space,
    pagination: {
        el: '.swiper-pagination ',
        dynamicBullets: true,
        clickable: true,
    },

    autoplay: {
        delay: 5000,
    },
});
var bpv;
if (window.innerWidth < 800) {
    bpv = 2;
} else {
    bpv = 3;
}
var blog_wrapper = new Swiper('.blog-wrapper ', {
    slidesPerView: bpv,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination ',
        dynamicBullets: true,
        clickable: true,
    },

    autoplay: {
        delay: 5000,
    },
});