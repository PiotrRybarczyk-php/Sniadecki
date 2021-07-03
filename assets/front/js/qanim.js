const animposition = []; //element position in document
const animoffset = [];  //height of element
const animcheck = [];   //checks if animation is done
const animcounter = []; //animation progress value
var element; // list of elements to be animated
var rad = Math.PI / 180; // radian value for calculations
var i = 0; // iteration value to get all elements data and check its position with scroll position
var c = 0; // iteration value used in timer to pull conditions on all elements during tick
var clock = 0; // one and only timer needed ;)
var ms = 10; // timer interval value
var min_speed = 0.4; //minimum speed of animation
var mul_speed = 1.4; //animation speed multiplier

window.onload = function () {
    //get all elements to be animated
    element = document.querySelectorAll(".qa_fade, .qa_fade-right, .qa_fade-left, .qa_fade-down, .qa_fade-up");
    //get all needed data 
    console.log(element.length);
    for (i; i < element.length; i++) {
        animposition[i] = (element[i].getBoundingClientRect().top + window.scrollY) - 600;
        animoffset[i] = animposition[i] + (element[i].offsetHeight + 300);
        animcheck[i] = false;
        animcounter[i] = 0;
    }
    i = 0;
    //everything runs on single interval so its less performance hungry :D
    clock = setInterval(function () {
        for (c; c < element.length; c++) {
            if (animcheck[c] == true) {
                if (animcounter[c] >= 100) {
                    //making sure it ends where it should ends
                    element[c].style.opacity = 100 + "%";
                    if (element[c].classList.contains('qa_fade-right') == true) {
                        element[c].style.right = 0 + "%";
                    } else if (element[c].classList.contains('qa_fade-left') == true) {
                        element[c].style.left = 0 + "%";
                    } else if (element[c].classList.contains('qa_fade-down') == true) {
                        element[c].style.top = 0 + "%";
                    } else if (element[c].classList.contains('qa_fade-up') == true) {
                        element[c].style.bottom = 0 + "%";
                    }
                } else {
                    animcounter[c] = animcounter[c] + ((Math.cos(animcounter[c] * rad) * mul_speed) + min_speed); // oh yeah... that makes animation smooth baby ;p
                    element[c].style.opacity = animcounter[c] + "%";
                    if (element[c].classList.contains('qa_fade-right') == true) {
                        element[c].style.right = (-100 + animcounter[c]) + "%";
                    } else if (element[c].classList.contains('qa_fade-left') == true) {
                        element[c].style.left = (-100 + animcounter[c]) + "%";
                    } else if (element[c].classList.contains('qa_fade-down') == true) {
                        element[c].style.top = (-100 + animcounter[c]) + "%";
                    } else if (element[c].classList.contains('qa_fade-up') == true) {
                        element[c].style.bottom = (-100 + animcounter[c]) + "%";
                    }
                }
            }
        }
        c = 0;
    }, ms);

};
window.onscroll = function () {
    for (i; i < element.length; i++) {
        if (window.scrollY >= animposition[i] && window.scrollY <= animoffset[i] && animcheck[i] == false) { animcheck[i] = true; } // checks if you scrolled to element position
    }
    i = 0;
};
