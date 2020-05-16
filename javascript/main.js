$(document).ready();

$(function () {
    $('.mouse-scroll').click(function (){
    $('html, body').animate({
        scrollTop: $('#second-section').offset().top
    },1000);  
})
  });