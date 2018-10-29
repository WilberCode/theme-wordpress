edgrid.menu('nav', 'menu')

// Menu Height
let d = document
window.onscroll = function () {
  stickyStop()
}
let space = '1.5rem'
let spaceDefault = '3.5rem'
let navbar = d.getElementById('header-container')
let rootStyles = d.documentElement.style
let sticky = navbar.offsetTop
function stickyStop () {
  if (window.pageYOffset > sticky) {
    rootStyles.setProperty('--header-height', space)
  } else {
    rootStyles.setProperty('--header-height', spaceDefault)
  }
}

// Slice Down
let accordion = d.querySelectorAll('.questions__btn')
for (let i = 0; i < accordion.length; i++) {
  accordion[i].classList.add('plus')
  accordion[0].classList.remove('plus')
  accordion[0].classList.add('less')
  accordion[0].classList.add('questions--active')
  let activeFirst = accordion[0].nextElementSibling
  activeFirst.style.maxHeight = activeFirst.scrollHeight + 'px'
  accordion[i].addEventListener('click', function () {
    this.classList.toggle('questions--active')
    this.classList.toggle('less')
    this.classList.toggle('plus')
    let panel = this.nextElementSibling
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null
    } else {
      panel.style.maxHeight = panel.scrollHeight + 'px'
    }
  })
}
