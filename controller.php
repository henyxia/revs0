<?php
if($_GET["url"] == "")
{
	require("projects_list.php");
	include("index.html");
}
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
{
	header("Content-type: image/png");
	include("images/h1.png");
}
else if($_GET["url"] == "img/home2.png")
{
	header("Content-type: image/png");
	include("images/h2.png");
}
else if($_GET["url"] == "img/home3.png")
{
	header("Content-type: image/png");
	include("images/h3.png");
}
else if($_GET["url"] == "img/home4.png")
{
	header("Content-type: image/png");
	include("images/h4.png");
}
else if($_GET["url"] == "img/background.png")
{
	header("Content-type: image/png");
	include("images/bg.png");
}
else if($_GET["url"] == 'fonts/fontawesome-webfont.eot' ||
		$_GET["url"] == 'fonts/fontawesome-webfont.eot' ||
		$_GET["url"] == 'fonts/fontawesome-webfont.woff' ||
		$_GET["url"] == 'fonts/fontawesome-webfont.ttf' ||
		$_GET["url"] == 'fonts/fontawesome-webfont.svg' ||
		$_GET["url"] == 'fonts/fontawesome-social-webfont.eot' ||
		$_GET["url"] == 'fonts/fontawesome-social-webfont.woff' ||
		$_GET["url"] == 'fonts/fontawesome-social-webfont.ttf' ||
		$_GET["url"] == 'fonts/fontawesome-social-webfont.svg')
	include($_GET["url"]);
else if($_GET["url"] == "js/breath")
    include("breath.js");
else if($_GET["url"] == "debug/globals")
    include("globals.php");
else
	header("HTTP/1.0 404 Expected ".$_GET['url']." is not found");
?>
