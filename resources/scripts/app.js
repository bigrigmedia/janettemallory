import { domReady } from '@roots/sage/client';

/**
 * Internal dependencies
 */
import './anchors';
import './backgrounds';
import './carousels';
import './heroes';
import './modals';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
