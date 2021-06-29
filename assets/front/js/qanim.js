const animposition = []; //element position in document
const animoffset = [];  //height of element
const animcheck = [];   //checks if animation is done
const animinterval = []; //animation timer for specific animation
const animcounter = []; //animation progress value
var element; // list of elements to be animated
var rad = Math.PI / 210; // radian value with tweak
var i = 0; // iteration variable... why you need more of them anyway...

window.onload = function () {
    //get all elements to be animated
    element = document.querySelectorAll(".qa_fade, .qa_fade-right, .qa_fade-left, .qa_fade-down, .qa_fade-up");
    //get all needed data 
    console.log(element.length);
    for (i; i < element.length; i++) {
        animposition[i] = (element[i].getBoundingClientRect().top + window.scrollY)-600;
        animoffset[i] = animposition[i] + (element[i].offsetHeight+300);
        animcheck[i] = false;
        animcounter[i] = 0;
        console.log(animposition[i]);
    }
    i = 0;

};
window.onscroll = function () {
    for (i; i < element.length; i++) {
        if (window.scrollY >= animposition[i] && window.scrollY <= animoffset[i] && animcheck[i] == false) {
            animcheck[i] = true;
            qanim(i); //this is where magic happens
        }
    }
    i = 0;
};

function qanim(id) {
    animinterval[id] = setInterval(function () {
        if (animcounter[id] >= 100) {
            clearInterval(animinterval[id]);
        } else {
            animcounter[id] = animcounter[id] + 2.5 * (Math.cos(animcounter[id] * rad));
            element[id].style.opacity = animcounter[id] + "%";
            if(element[id].classList.contains('qa_fade-right') == true){
                element[id].style.right = (-100 + animcounter[id]) + "%";
            }else if(element[id].classList.contains('qa_fade-left') == true){
                element[id].style.left = (-100 + animcounter[id]) + "%";
            }else if(element[id].classList.contains('qa_fade-down') == true){
                element[id].style.top = (-100 + animcounter[id]) + "%";
            }else if(element[id].classList.contains('qa_fade-up') == true){
                element[id].style.bottom = (-100 + animcounter[id]) + "%";
            }
        }
    }, 8)

};
