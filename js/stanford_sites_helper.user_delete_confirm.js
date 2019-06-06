/**
 * @file
 * States dont work very well because each radio option is its own thing. The
 * listener will show the form group but wont hide it appropriately.
 */

(function ($) {
  Drupal.behaviors.userDeleteConfirm = {
    attach: function (context, settings) {

      var $userContent = $('#edit-user-cancel-method .user-content', context);
      $userContent.hide();
      if ($('input[value="user_cancel_delete"]', context).is(':checked')) {
        $userContent.show();
      }

      $('#edit-user-cancel-method input[type="radio"]', context).change(function () {
        $userContent.hide();
        if (this.value == 'user_cancel_delete') {
          $userContent.show();
        }
      });
    }
  }
})(jQuery);
