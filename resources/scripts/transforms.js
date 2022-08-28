/**
 * Internal dependencies
 */
import { observeTransforms } from './utils';

const jsTransforms = document.querySelectorAll('.js-transform')

// Handle backgrounds
if (jsTransforms) {
  if (('IntersectionObserver' in window)) {
    if (window.matchMedia('(min-width: 1024px)').matches) {
      let observer = new IntersectionObserver(observeTransforms, {
        root: null,
        rootMargin: '0px',
        threshold: 0.1,
      })

      jsTransforms.forEach(jsTransform => {
        observer.observe(jsTransform)
      })
    }
  }
}
