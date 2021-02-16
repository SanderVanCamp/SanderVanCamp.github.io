/* Source and licensing information for the line(s) below can be found at http://local.sandervancamp.be/modules/contrib/pathauto/pathauto.js. */
(function ($) {
  'use strict';
  Drupal.behaviors.pathFieldsetSummaries = {
    attach: function (context) {
      $(context).find('.path-form').drupalSetSummary(function (context) {
        var path = $('.js-form-item-path-0-alias input', context).val();
        var automatic = $('.js-form-item-path-0-pathauto input', context).prop('checked');

        if (automatic) {
          return Drupal.t('Automatic alias');
        }
        else if (path) {
          return Drupal.t('Alias: @alias', {'@alias': path});
        }
        else {
          return Drupal.t('No alias');
        }
      });
    }
  };
})(jQuery);

/* Source and licensing information for the above line(s) can be found at http://local.sandervancamp.be/modules/contrib/pathauto/pathauto.js. */