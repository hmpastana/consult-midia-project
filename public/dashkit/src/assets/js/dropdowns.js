//
// dropdowns.js
//

'use strict';

(function() {
  var dropdowns = document.querySelectorAll('.dropup, .dropright, .dropdown, .dropleft');
  var events = ['click'];

  function toggleDropdown(e, dropdown) {
    var parentMenu = dropdown.closest('.dropdown-menu');

    if (parentMenu) {
      e.preventDefault();
      e.stopPropagation();

      var currentMenu = dropdown.querySelector('.dropdown-menu');
      var siblingMenus = parentMenu.querySelectorAll('.dropdown-menu');

      [].forEach.call(siblingMenus, function(menu) {
        if (menu !== currentMenu) {
          menu.classList.remove('show');
        }
      });

      currentMenu.classList.toggle('show');
    }
  }

  function hideDropdowns(dropdown) {
    var currentMenu = dropdown.querySelector('.dropdown-menu');
    var nestedMenus = currentMenu.querySelectorAll('.dropdown-menu');

    if (nestedMenus) {
      [].forEach.call(nestedMenus, function(menu) {
        menu.classList.remove('show');
      });
    }
  }

  [].forEach.call(dropdowns, function(dropdown) {
    var toggle = dropdown.querySelector('[data-toggle="dropdown"]');

    toggle.addEventListener(events[0], function(e) {
      toggleDropdown(e, dropdown);
    });
  });

  $(dropdowns).on('hide.bs.dropdown', function() {
    hideDropdowns(this);
  });
})();
