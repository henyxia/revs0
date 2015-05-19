window.onload = breath;
var actuSec = 0;

function breath()
{
    actuSec++;
    if(actuSec>100)
        actuSec = 0;
    document.getElementById("home").style.boxShadow = "box-shadow: 0px 0px 10px rgb("+(155+actuSec)+","+(155+actuSec)+","+(155+actuSec)+")";
    setTimeout('breath();','100');
}