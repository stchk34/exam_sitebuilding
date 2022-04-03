/**
 * @file
 * JavaScript behaviors for element help text (tooltip).
 */

(function ($, Drupal) {

  'use strict';

  // @see https://atomiks.github.io/tippyjs/v5/all-props/
  // @see https://atomiks.github.io/tippyjs/v6/all-props/
  Drupal.webform = Drupal.webform || {};
  Drupal.webform.elementHelpIcon = Drupal.webform.elementHelpIcon || {};
  Drupal.webform.elementHelpIcon.options = Drupal.webform.elementHelpIcon.options || {};

  /**
   * Element help icon.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformElementHelpIcon = {
    attach: function (context) {
      if (!window.tippy) {
        return;
      }

      // Hide on escape.
      // @see https://atomiks.github.io/tippyjs/v6/plugins/#hideonesc
      //
      // Converted from ES6 to ES5.
      // @see https://babeljs.io/repl/
      var hideOnEsc = {
        name: 'hideOnEsc',
        defaultValue: true,
        fn: function fn(_ref) {
          var hide = _ref.hide;

          function onKeyDown(event) {
            if (event.keyCode === 27) {
              hide();
            }
          }

          return {
            onShow: function onShow() {
              document.addEventListener('keydown', onKeyDown);
            },
            onHide: function onHide() {
              document.removeEventListener('keydown', onKeyDown);
            }
          };
        }
      };

      $(context).find('.js-webform-element-help').once('webform-element-help').each(function () {
        var $link = $(this);

        $link.on('click', function (event) {
          // Prevent click from toggling <label>s wrapped around help.
          event.preventDefault();
        });

        var options = $.extend({
          content: $link.attr('data-webform-help'),
          delay: 100,
          allowHTML: true,
          interactive: true,
          plugins: [hideOnEsc]
        }, Drupal.webform.elementHelpIcon.options);

        tippy(this, options);
      });
    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * JavaScript behaviors for input hiding.
 */

(function ($, Drupal) {

  'use strict';

  var isChrome = (/chrom(e|ium)/.test(window.navigator.userAgent.toLowerCase()));

  /**
   * Initialize input hiding.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformInputHide = {
    attach: function (context) {
      // Apply chrome fix to prevent password input from being autofilled.
      // @see https://stackoverflow.com/questions/15738259/disabling-chrome-autofill
      if (isChrome) {
        $(context).find('form:has(input.js-webform-input-hide)')
          .once('webform-input-hide-chrome-workaround')
          .each(function () {
            $(this).prepend('<input style="display:none" type="text" name="chrome_autocomplete_username"/><input style="display:none" type="password" name="chrome_autocomplete_password"/>');
          });
      }

      // Convert text based inputs to password input on blur.
      $(context).find('input.js-webform-input-hide')
        .once('webform-input-hide')
        .each(function () {
          var type = this.type;
          // Initialize input hiding.
          this.type = 'password';

          // Attach blur and focus event handlers.
          $(this)
            .on('blur', function () {
              this.type = 'password';
              $(this).attr('autocomplete', 'off');
            })
            .on('focus', function () {
              this.type = type;
              $(this).removeAttr('autocomplete');
            });
        });
    }
  };

})(jQuery, Drupal);
;
