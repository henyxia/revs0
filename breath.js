setTimeout('breath();','500');

function breath()
{
    var date = new Date;
    var sec = date.getSeconds();
    document.getElementById("home").style.boxShadow = "box-shadow: 0px 0px 10px rgb("+(195+sec)+","+(195+sec)+","+(195+sec)+")";
}