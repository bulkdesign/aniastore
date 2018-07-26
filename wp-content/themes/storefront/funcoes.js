(function($) {
  $(function() {
  	$("#masthead").sticky({topSpacing:0});
  	$('.parallax').parallax();
    $('.toggle-overlay').click(function() {
      $('aside').toggleClass('open');
    });
  });
})(jQuery);