import Slideout from 'slideout';
import jQuery from 'jquery';
export default {
  init() {
    // JavaScript to be fired on all pages
  var slideout = new Slideout({
      'panel': document.getElementById('page'),
      'menu': document.getElementById('slideout-menu'),
      'padding': 256,
      'tolerance': 70
  });
  jQuery('.nav-icon').on('click', function() {
    slideout.toggle();
    jQuery(this).toggleClass('active');
  }); 
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
