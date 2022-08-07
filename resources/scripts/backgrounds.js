/**
 * Internal dependencies
 */
import { observeBackgrounds } from './utils';

const jsBackgrounds = document.querySelectorAll('.js-background')

// Handle backgrounds
if (jsBackgrounds) {
  if (('IntersectionObserver' in window)) {
    let observer = new IntersectionObserver(observeBackgrounds);

    jsBackgrounds.forEach(jsBackground => {
      observer.observe(jsBackground)
    })
  }
}
