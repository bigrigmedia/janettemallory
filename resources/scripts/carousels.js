/**
 * External dependencies
 */
import Siema from 'siema'

const jsCarousel = document.querySelector('.siema')
const jsNext = document.querySelector('.js-next')
const jsPrev = document.querySelector('.js-prev')

// Handle carousel
if (jsCarousel) {
  const carousel = new Siema({
    draggable: true,
    duration: 500,
    loop: true,
  })

  setInterval(() => carousel.next(), 5000)

  //jsPrev.addEventListener('click', () => carousel.prev())
  //jsNext.addEventListener('click', () => carousel.next())
}
