let bouton = document.getElementById('menu');
let menu = document.getElementsByClassName('main-nav-mobile')[0];

bouton.addEventListener('click', function () {
    menu.classList.toggle('undisplay');
})