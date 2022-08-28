const body = document.querySelector('body');
const jsNavs = document.querySelectorAll('.js-nav')

// Handle nav button
if (jsNavs) {
  const navMenu = document.getElementById('nav-menu')

  document.addEventListener('click', () => {
    if (body.classList.contains('nav-open')) {
      body.classList.remove('nav-open')
    }
  })

  jsNavs.forEach(jsNav => {
    jsNav.addEventListener('click', (e) => {
      e.stopPropagation()

      body.classList.toggle('nav-open')
    })
  })
}