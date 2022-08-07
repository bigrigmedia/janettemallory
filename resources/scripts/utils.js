/**
 * isExternal
 *
 * Determine if an anchors url is external
 *
 * @param {object} link - The anchor to check
 *
 * @return {boolean}
 */
export const isExternal = link => {
  if (!link.host) return

  return link.host !== window.location.host
}

/**
 * isEmpty
 *
 * Determine if an element's innerHTML is empty
 *
 * @param {object} element - The element to potentially remove
 */
export const isEmpty = element => {
  if (!element) return

  if (element.innerHTML === '') element.remove()
}

/**
 * disableContext
 *
 * Prevent the default right menu click
 *
 * @param {object} element - The element that will get disabled
 */
export const disableContext = element => {
  if (!element) return

  element.addEventListener('contextmenu', (e) => {
    e.preventDefault()
  })
}

/**
 * observeBackgrounds
 *
 * Determine if element with background is entering the frame
 *
 * @param {array} elements - The elements with backgrounds to watch
 */
export const observeBackgrounds = elements => {
  elements.forEach(element => {
    if (element.isIntersecting) {
      handleBackground(element)
    }
  })
}

/**
 * handleBackground
 *
 * Set an element's background
 *
 * @param {object} element - The element to set a background to
 */
export const handleBackground = element => {
  const mobileBG = element.target.dataset.mobile
  const desktopBG = element.target.dataset.desktop

  setSectionBackground(element, mobileBG, desktopBG)

  window.addEventListener('resize', () => {
    setSectionBackground(element, mobileBG, desktopBG)
  })

  element.target.classList.add('has-loaded')
}

/**
 * setSectionBackground
 *
 * Sets the section background image depending on window size
 *
 * @param {string} element
 * @param {string} mobile
 * @param {string} desktop
 */
export const setSectionBackground = (element, mobile, desktop) => {
  if (!mobile && !desktop) return

  if (window.matchMedia('(min-width: 1024px)').matches) {
    element.target.style.backgroundImage = `url(${desktop})`
  } else {
    element.target.style.backgroundImage = `url(${mobile})`
  }
}

/**
 * setHeroBackground
 *
 * Sets the hero background image depending on window size
 *
 * @param {string} element
 * @param {string} mobile
 * @param {string} desktop
 */
export const setHeroBackground = (element, mobile, desktop) => {
  if (!mobile && !desktop) return

  if (window.matchMedia('(min-width: 1024px)').matches) {
    element.style.backgroundImage = `url(${desktop})`
  } else {
    element.style.backgroundImage = `url(${mobile})`
  }
}
