function openmenu() {

    gsap.fromTo("#mobile-menu", {
        display: 'none',
        left: -410, //normal value

    }, {
        display: 'block',
        left: 0,

        duration: 1
    });
}

function closemenu() {

    gsap.fromTo("#mobile-menu", {
        display: 'block',
        left: 0, //normal value

    }, {
        display: 'none',
        left: -410,

        duration: 1
    });
}