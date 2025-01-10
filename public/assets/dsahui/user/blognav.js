// Add your JavaScript code here to make the navigation responsive
// For example, you can use a hamburger menu for smaller screens

const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.b-nav');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
});