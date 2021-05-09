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