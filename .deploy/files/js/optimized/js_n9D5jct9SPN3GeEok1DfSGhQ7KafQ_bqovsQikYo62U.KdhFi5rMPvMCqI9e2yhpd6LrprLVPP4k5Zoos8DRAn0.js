/* Source and licensing information for the line(s) below can be found at http://local.sandervancamp.be/core/misc/entity-form.js. */
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.behaviors.entityContentDetailsSummaries = {
    attach: function attach(context) {
      var $context = $(context);
      $context.find('.entity-content-form-revision-information').drupalSetSummary(function (context) {
        var $revisionContext = $(context);
        var revisionCheckbox = $revisionContext.find('.js-form-item-revision input');

        if (revisionCheckbox.is(':checked') || !revisionCheckbox.length && $revisionContext.find('.js-form-item-revision-log textarea').length) {
          return Drupal.t('New revision');
        }

        return Drupal.t('No revision');
      });
      $context.find('details.entity-translation-options').drupalSetSummary(function (context) {
        var $translationContext = $(context);
        var translate;
        var $checkbox = $translationContext.find('.js-form-item-translation-translate input');

        if ($checkbox.length) {
          translate = $checkbox.is(':checked') ? Drupal.t('Needs to be updated') : Drupal.t('Does not need to be updated');
        } else {
          $checkbox = $translationContext.find('.js-form-item-translation-retranslate input');
          translate = $checkbox.is(':checked') ? Drupal.t('Flag other translations as outdated') : Drupal.t('Do not flag other translations as outdated');
        }

        return translate;
      });
    }
  };
})(jQuery, Drupal);
/* Source and licensing information for the above line(s) can be found at http://local.sandervancamp.be/core/misc/entity-form.js. */