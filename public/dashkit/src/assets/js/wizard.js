//
// wizard.js
// 

'use strict';

(function() {
  var toggles = document.querySelectorAll('[data-toggle="wizard"]');

  [].forEach.call(toggles, function(toggle) {
    toggle.addEventListener('click', function(e) {
      e.preventDefault();

      // Toggle tab
      $(toggle).tab('show').removeClass('active');
    });
  });
})();
