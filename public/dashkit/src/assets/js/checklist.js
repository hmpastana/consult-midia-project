//
// kanban.js
// Dashkit module
//

'use strict';

(function() {

  //
  // Variables
  //

  var checklist = document.querySelectorAll('.checklist');

  //
  // Functions
  //

  function init(checklist) {
    new Draggable.Sortable(checklist, {
      draggable: '.checklist-control',
      handle: '.custom-control-caption',
      mirror: {
        constrainDimensions: true
      }
    });
  }

  //
  // Events
  //

  if (typeof Draggable !== 'undefined' && checklist) {
    init(checklist);
  }

})();
