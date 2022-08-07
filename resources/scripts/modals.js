/**
 * External dependencies
 */
import { Fancybox } from '@fancyapps/ui'

const jsModals = document.querySelector('.js-modals')

// Handle galleries
if (jsModals) {
  Fancybox.bind('[data-fancybox="gallery"]', {})
}
