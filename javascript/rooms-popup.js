let button1 = document.getElementById('btn1');
let popup_window = document.getElementById('popup');
let close = document.getElementById('close');

let popup_images = document.getElementById('popup-main-image');
let left_arrow = document.getElementById('popup-left-arrow');
let right_arrow = document.getElementById('popup-right-arrow');

let isHidden = true;

let presidentialsuite_array = new Array ();
presidentialsuite_array[0] = new Image();
presidentialsuite_array[0].src = "images/wallpapers/popup-images/room1.jpg";

presidentialsuite_array[1] = new Image();
presidentialsuite_array[1].src = "images/wallpapers/popup-images/room2.jpg";

presidentialsuite_array[2] = new Image();
presidentialsuite_array[2].src = "images/wallpapers/popup-images/room3.jpg";

button1.addEventListener("click", showBox);

close.addEventListener("click", showBox);

function showBox() {
    if(isHidden == true) {
        popup_window.style.display = "flex";
        isHidden = false;

    } else if (isHidden == false) {
        popup_window.style.display = "none";
        isHidden = true;
    }
};

let i = 0;
right_arrow.addEventListener("click", nextImage);
left_arrow.addEventListener("click", previousImage);

function nextImage () {
    if (i >= 2) {
        i = 0;
    } else {
        i++;
    }
    popup_images.src = presidentialsuite_array[i].src;
};

function previousImage () {
    if(i <= 0) {
        i = 2;
    } else {
        i--;
    }
    popup_images.src = presidentialsuite_array[i].src;
}




