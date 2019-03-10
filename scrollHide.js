$(document).ready(function() {
  var nav_height = $(".nav").height();
  var lastScrollTop = 0;
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var currScrollTop = $(this).scrollTop();
    if (scroll >= nav_height && currScrollTop > lastScrollTop) {
      $(".nav").hide();
    } else {
      $(".nav").show();
    }
    lastScrollTop = currScrollTop;

  });

});