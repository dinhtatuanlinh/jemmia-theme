function openmenu() {
    gsap.fromTo("#mobile-menu", {
        left: -410, //normal value

    }, {
        left: 0,

        duration: 1
    });
}

function closemenu() {
    gsap.fromTo("#mobile-menu", {
        left: 0, //normal value

    }, {
        left: -410,

        duration: 1
    });
}