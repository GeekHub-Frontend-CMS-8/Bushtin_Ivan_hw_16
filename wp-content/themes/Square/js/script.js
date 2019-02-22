document.addEventListener('DOMContentLoaded', function () {
    var hamburger = document.getElementById('openMenu');
    var navList =  document.getElementsByClassName('hidden')[0];

    hamburger.addEventListener('click', function (e) {
        e.preventDefault();

        navList.classList.toggle('nav-list');
        hamburger.classList.toggle('rotate');
    });
});