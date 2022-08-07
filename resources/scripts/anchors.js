/**
 * Internal dependencies
 */
import { isExternal } from './utils'

const anchors = document.querySelectorAll('a')

// Handle external urls
if (anchors) {
  anchors.forEach(anchor => {
    if (isExternal(anchor)) {
      // Define attributes to set
      const attributes = {
        target: '__blank',
        rel: 'noopener',
      }

      // Set attributes
      Object.keys(attributes).forEach(attribute => {
        anchor.setAttribute(attribute, attributes[attribute])
      })
    }
  })
}
