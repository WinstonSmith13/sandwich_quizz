const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLink = document.getElementsByClassName('navbar-links')[0]


toggleButton.addEventListener('click', ()=>{
navbarLink.classList.toggle('active')})