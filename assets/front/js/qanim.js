const animid = [];
const animposition = [];
const animoffset = [];
const animcheck = [];
const animinterval = [];
const animcounter = [];
var element = null;
var rad = Math.PI / 210;
var i = 0;

window.onload = function () {
    //get all elements to be animated
    element = document.getElementsByClassName("qanim");
    //get all needed data
    for (i; i < element.length; i++) {
        animid[i] = element[i].id;
        animposition[i] = element[i].getBoundingClientRect().top + window.scrollY - (element[i].offsetHeight - 100);
        animoffset[i] = animposition[i] + element[i].offsetHeight;
        animcheck[i] = false;
        animcounter[i] = 0;
        console.log(animoffset[i]);
    }
    i = 0;

};
window.onscroll = function () {
    for (i; i < element.length; i++) {
        if (window.scrollY >= animposition[i] && window.scrollY <= animoffset[i] && animcheck[i] == false) {
            animcheck[i] = true;
            //animate
            qanim(i);
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
            switch (animid[id]) {
                case 'fade_right':
                    element[id].style.right = (-100 + animcounter[id]) + "%";
                    break;
                case 'fade_left':
                    element[id].style.left = (-100 + animcounter[id]) + "%";
                    break;
                default:
                    console.log('Sorry, animation not finded.');
            }
        }
    }, 8)

};
