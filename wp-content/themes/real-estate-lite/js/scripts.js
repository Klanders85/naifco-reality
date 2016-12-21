/**
 * Website js scripts init
 */
(function($){
$(document).ready(function() {
  $('.toggle-menu').jPushMenu();
  setTimeout(function() {
  	$('#mainContainer').fadeIn('slow');
  },250);
  
}); })( jQuery );