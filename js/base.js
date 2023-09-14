
// side menu toggle.
document.querySelector('#collapseWidthExample').addEventListener('hide.bs.collapse', function () {
    document.querySelector('.side_menu_text').innerHTML = "&gt;&gt;";
});
document.querySelector('#collapseWidthExample').addEventListener('show.bs.collapse', function () {
    document.querySelector('.side_menu_text').innerHTML = "&lt;&lt;";
});
