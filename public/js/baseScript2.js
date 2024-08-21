let menuBtn = document.getElementById('menu-btn');
let nav = document.querySelector('nav ul');

menuBtn.onclick = () => {
    nav.classList.toggle('active');
    menuBtn.classList.toggle('fa-times');
}

var swiper = new Swiper(".hero-container", {
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop:true,
});