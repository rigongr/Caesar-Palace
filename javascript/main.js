$(document).ready();

// Form validation

let name = document.getElementById('name');
let email = document.getElementById('email');
let message = document.getElementById('message');
let form = docuemnt.getElementById('form');

function validate() {
    if(name.value == "") {
        name.placeholder = "You can't leave your name blank."
        name.style.borderBottom = "solid 1px red"
        name.classList.add('color');
    }
}


$(function () {
    $('.mouse-scroll').click(function (){
    $('html, body').animate({
        scrollTop: $('#second-section').offset().top
    },1000);  
})
  });

