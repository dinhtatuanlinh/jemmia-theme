function addStr(str, index, stringToAdd) {
    return str.substring(0, index) + stringToAdd + str.substring(index, str.length);
}
var nav = document.getElementById('navi');
var firstli = nav.querySelectorAll('nav > ul >li');
for (var i = 0; i < firstli.length; i++) {
    var childul = firstli[i].getElementsByTagName('ul');
    if (childul.length > 0) {

        var n = firstli[i].innerHTML.search('<ul');

        firstli[i].innerHTML = addStr(firstli[i].innerHTML, n - 1, '<i class="fa fa-caret-down" aria-hidden="true"></i>');
        var secondli = childul[0].getElementsByTagName('li');
        for (var j = 0; j < secondli.length; j++) {
            var secondchildul = secondli[j].getElementsByTagName('ul');
            if (secondchildul.length > 0) {
                var m = secondli[j].innerHTML.search('<ul');
                secondli[j].innerHTML = addStr(secondli[j].innerHTML, m - 1, '<i class="fa fa-caret-right" aria-hidden="true"></i>');
            }
        }
    }

}
var mobile_menu = document.getElementById('mobile-menu');
var mobile_firstli = mobile_menu.querySelectorAll('ul >li');
for (var i = 0; i < mobile_firstli.length; i++) {
    var childul = mobile_firstli[i].getElementsByTagName('ul');
    if (childul.length > 0) {
        childul[0].classList.add('hide');
        var n = mobile_firstli[i].innerHTML.search('<ul');

        mobile_firstli[i].innerHTML = addStr(mobile_firstli[i].innerHTML, n - 1, `<i onclick="showChildMenu(${i})" class="fa fa-arrow-right" aria-hidden="true"></i>`);
        var secondli = childul[0].getElementsByTagName('li');
        for (var j = 0; j < secondli.length; j++) {
            var secondchildul = secondli[j].getElementsByTagName('ul');
            if (secondchildul.length > 0) {
                var m = secondli[j].innerHTML.search('<ul');
                secondli[j].innerHTML = addStr(secondli[j].innerHTML, m - 1, `<i onclick="showChildMenu(${j})" class="fa fa-arrow-right" aria-hidden="true"></i>`);
            }
        }
    }

}

function showChildMenu(a) {
    mobile_firstli[a].getElementsByTagName('ul')[0].classList.remove('hide');
}