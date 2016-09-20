(function ($) {
  'use strict';

  // MenuToggle
  if (typeof Drupal != 'undefined') {
    Drupal.behaviors.materialize = {
      attach: function (context, settings) {
        $('.materialize-textarea').trigger('autoresize');
        $('select').material_select();
       $('.webform-component-matrix .form-type-textfield').each(function () {
         var label = $(this).find('label');
         $(this).find('input').attr('placeholder', label.html());
       });
      }
    };
  }
  else {
  }

})(jQuery);
