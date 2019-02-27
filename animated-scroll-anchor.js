// JavaScript Document
$(document).ready(function(){
  $(".scroll-down").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
    
  setInterval(function(){
    $('.scroll-down').toggleClass("bounce");
  }, 5000);    
    
});