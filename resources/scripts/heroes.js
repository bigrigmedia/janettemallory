/**
 * Internal dependencies
 */
import { setHeroBackground } from './utils'

const jsHero = document.querySelector('.js-hero')

// Handle hero background
if (jsHero) {
  const mobileHero = jsHero.dataset.mobile
  const desktopHero = jsHero.dataset.desktop

  if (mobileHero && desktopHero) {
    jsHero.classList.add('has-bg')

    setHeroBackground(jsHero, mobileHero, desktopHero)

    window.addEventListener('resize', () => {
      setHeroBackground(jsHero, mobileHero, desktopHero)
    })
  }
}
