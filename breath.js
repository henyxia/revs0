window.onload = breathOnce;
var actuSec = 0;
var ax, ay, vx, vy, px, py;

function breathOnce()
{
    var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;
    document.getElementById("home").style.top = x+"px";
    document.getElementById("home").style.left = y+"px";
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
    var punch = 100;
    var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;
    var ax = Math.floor((Math.random()*punch)-(punch/2));
    var ay = Math.floor((Math.random()*punch)-(punch/2));
    
    //And again
    setTimeout('breath();','100');
}