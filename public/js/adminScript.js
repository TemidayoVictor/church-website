let menuBtn = document.getElementById('menu-btn');
let header = document.querySelector('.header-admin');

menuBtn.onclick = () => {
    header.classList.toggle('active');
    menuBtn.classList.toggle('fa-times');
}