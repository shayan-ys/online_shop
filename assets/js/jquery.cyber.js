// Dropdown Menu Fade
$(function() {
  var timer;

      $(document).ready(function(){
            $(".dropdown").hoverIntent({
                over: makeTall,
                out: makeShort,
                interval: 500
            });
        });

        function makeTall(){
           clearTimeout(timer);
            $(".dropdown-menu").hide();
            $(this).find('.dropdown-menu').show();
        }
        function makeShort(){
           timer = setTimeout(function(){
                $(".dropdown-menu").hide();
            },300);
        }


});
$(document).ready(function() {

    $("#video-slider").owlCarousel({
        navigation: true, // Show next and prev buttons
        pagination: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigationText: [" ", " "]
    });

});

$(function() {

  var width = $(window).width();
  if(width > 768 ) {
        $('header .bottom .navbar-default .navbar-nav > li > a').addClass('disabled');
  }
});
