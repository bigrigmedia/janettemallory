<?php

/**
 * Gravity Form Customizations.
 */

namespace App;

/**
 * Force Gravity Form to scroll to form top position upon submission
 */
add_filter('gform_confirmation_anchor', '__return_true');
