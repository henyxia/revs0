<?php
if($_GET["url"] == "")
    include("index.html");
else if($_GET["url"] == "index.html")
    header("Location: http://www.revs0.com");
else if($_GET["url"] == "css/theme")
{
    header("Content-type: text/css");
    include("theme.css");
}
else if($_GET["url"] == "css/fonts")
{
    header("Content-type: text/css");
    include("fonts.css");
}
else if($_GET["url"] == "img/home1.png")
	include("images/h1.png");
else if($_GET["url"] == "img/home2.png")
	include("images/h2.png");
else if($_GET["url"] == "img/home3.png")
	include("images/h1.png");
else if($_GET["url"] == "img/home4.png")
	include("images/h1.png");
else if($_GET["url"] == "img/background.png")
	include("images/bg.png");
else if($_GET["url"] == "js/breath")
    include("breath.js");
else if($_GET["url"] == "debug/globals")
    include("globals.php");
else
	header("HTTP/1.0 404 Expected ".$_GET['url']." is not found");
	//header("Location: http://www.revs0.com");
?>
