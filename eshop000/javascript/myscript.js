const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('nav-ul');

hamburger.addEventListener('click', () => {
  menu.classList.toggle('show');
});