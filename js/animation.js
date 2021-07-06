
window.addEventListener('scroll', ()=> {
  if ( window.scrollY >= 15 ) {
    document.getElementById('navigation').style.background = '#fff'
  } else {
    document.getElementById('navigation').style.background = 'transparent'
  }
})

let burger = document.querySelector('.burger');
let nav = document.querySelector('#menu-main')

burger.addEventListener('click', ()=> {
  burger.classList.toggle('active');
  nav.classList.toggle('toggled');
})
