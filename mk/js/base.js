
// side menu toggle.
document.querySelector('#collapseWidthExample').addEventListener('hide.bs.collapse', function () {
    document.querySelector('.side_menu_text').innerHTML = "&gt;&gt;";
});
document.querySelector('#collapseWidthExample').addEventListener('show.bs.collapse', function () {
    document.querySelector('.side_menu_text').innerHTML = "&lt;&lt;";
});
window.onload = function () {
    var wd = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    if (wd <= 575) {
        document.getElementById("side_menu_button").click();
    }
}
