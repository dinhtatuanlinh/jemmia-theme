var sizeChart = (e, content) => {
    var tab = document.getElementsByClassName('tab');
    var ct = document.getElementsByClassName('content');
    for (var i = 0; i < tab.length; i++) {
        tab[i].classList.remove('selected');
        ct[i].style.display = "none";
    }

    e.classList.add('selected');
    gsap.fromTo(`#${content}`, {
        display: 'none',
        scale: 0.2
    }, {
        display: 'block',
        scale: 1,
        duration: 1,

    })
}