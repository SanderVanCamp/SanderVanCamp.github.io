/* Source and licensing information for the line(s) below can be found at http://local.sandervancamp.be/core/modules/responsive_image/js/responsive_image.ajax.js. */
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Drupal) {
  Drupal.behaviors.responsiveImageAJAX = {
    attach: function attach() {
      if (window.picturefill) {
        window.picturefill();
      }
    }
  };
})(Drupal);
/* Source and licensing information for the above line(s) can be found at http://local.sandervancamp.be/core/modules/responsive_image/js/responsive_image.ajax.js. */