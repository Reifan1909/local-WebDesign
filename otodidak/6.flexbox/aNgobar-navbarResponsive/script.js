const menuToggle = document.querySelector('.menu-toggle input');
const navv = document.querySelector('nav ul');

menuToggle.addEventListener('click', function() {
    navv.classList.toggle('slide');
}); 