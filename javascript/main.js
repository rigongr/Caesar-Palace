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
message.value = " ";

function validate() {
    if(name.value == "" || name.value.length < 2 || name.value == 09) {
        name.placeholder = "Name invalid."
        name.style.borderBottom = "solid 1px red"
        name.classList.add('color');
        
    } else {
        name.style.borderBottom = "solid 1px white";
    }

    if(email.value.indexOf("@") == -1 || email.value.length < 6 || email.value == "" || email.value.indexOf(".com") == -1) {
        email.placeholder = "Insert a valid email"
        email.style.borderBottom = "solid 1px red"
        email.classList.add('color');
    
    } else {
            email.style.borderBottom = "solid 1px white";
    }
    
    if(message.value == "" || message.value.length < 10) {
        message.placeholder = "Insert a message, longer than 10 characters atleast"
        message.style.border = "solid 1px red"
        message.classList.add('color');
        return false;
    } else {
        message.style.borderBottom = "solid 1px white";
    }

    return true;
};