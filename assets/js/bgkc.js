var all = document.getElementsByClassName('all');
var bgkc_tab = document.getElementsByClassName('bgkc-tab');

function showbgkc(tab) {
	if(typeof omktAddTag === "function"){
        omktAddTag('Xem bảng giá' + tab)
    }
    if (tab === 'all') {
        for (i = 0; i < bgkc_tab.length; i++) {
            bgkc_tab[i].classList.remove("active");
        }
        document.getElementById('all').classList.add("active");

        for (i = 0; i < all.length; i++) {
            all[i].style.display = "block";
        }
        gsap.fromTo('.all', {
            scale: 0.2
        }, {
            scale: 1,
            duration: 1,

        })
    } else {
		
        for (i = 0; i < bgkc_tab.length; i++) {
            bgkc_tab[i].classList.remove("active");
        }
        document.getElementById(tab).classList.add("active");
        var display = document.getElementsByClassName(tab)[0];
        for (i = 0; i < all.length; i++) {
            all[i].style.display = "none"
        }
        display.style.display = "block";
        var cl = document.getElementsByClassName(tab);
        gsap.fromTo(cl, {
            scale: 0.2
        }, {
            scale: 1,
            duration: 1,

        })
    }
}
var bgkcUrl = window.location.href;

if (bgkcUrl === 'https://jemmia.vn/bang-gia-si-kim-cuong-gia') {
    showbgkc('5ly4');
}
if (bgkcUrl === 'https://jemmia.vn/bang-gia-kim-cuong-tu-nhien') {
	
    showbgkc('5ly');

}