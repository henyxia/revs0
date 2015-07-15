/*
window.onload = breathOnce;
var actuSec = 0;
var punch = 200;
var ax, ay, vx = 0, vy = 0, px, py;

function breathOnce()
{
    var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;
    px = x/2;
    py = y/2;
    breath();
}

function breath()
{
    //Changing shadow
    actuSec++;
    if(actuSec>100)
        actuSec = 0;
    document.getElementById("home").style.boxShadow = "0px 0px 10px rgb("+(155+actuSec)+","+(155+actuSec)+","+(155+actuSec)+")";
    
    //Centering
    var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;
    ax = Math.floor((Math.random()*punch)-(punch/2));
    ay = Math.floor((Math.random()*punch)-(punch/2));
    vx = vx + ax*punch/1000;
    vy = vy + ay*punch/1000;
    px = px + vx*punch/1000;
    py = py + vy*punch/1000;
    document.getElementById("home").style.top = py/2+"px";
    document.getElementById("home").style.left = px/2+"px";

    //And again
    setTimeout('breath();', punch);
}*/

$(document).ready(function() {
    function pulsate() {
        $("#home").animate({ opacity: 0.2 }, 1200, 'linear')
                     .animate({ opacity: 1 }, 1200, 'linear', pulsate)
                     .click(function() {
                         $(this).animate({ opacity: 1 }, 1200, 'linear');
                         $(this).stop();
                     });
        }

    pulsate();
});