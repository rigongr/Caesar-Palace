$(document).ready();

$(function () {
    $('.mouse-scroll').click(function (){
    $('html, body').animate({
        scrollTop: $('#second-section').offset().top
    },1000);  
})
  });


// Form validation

let name = document.getElementById('name');
let email = document.getElementById('email');
let message = document.getElementById('message');
let form = document.getElementById('form');

function validate() {
    if(name.value == "" || name.value.length < 2 || name.value == 09) {
        name.placeholder = "Name invalid."
        name.style.borderBottom = "solid 1px red"
        name.classList.add('color');
        return false;
    } else {
        name.style.borderBottom = "solid 1px white";
    }

    if(email.value.indexOf("@") == -1 || email.value.length < 6 || email.value == "" || email.value.indexOf(".com") == -1) {
        email.placeholder = "Insert a valid email"
        email.style.borderBottom = "solid 1px red"
        name.classList.add('color');
        return false;
    } else {
            email.style.borderBottom = "solid 1px white";
    };

    return true;
};