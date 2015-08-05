<?php
if($_GET["url"] == "")
{
	require("project_list.php");
	include("index.html");
}
else if(preg_match("/arti_([a-zA-Z0-9]+)_([a-zA-Z0-9]+)/", $_GET["url"], $matches))
{
	$folder = $matches[1];
	$article = $matches[2];

	require_once("project_list.php");
	require_once("project_tools.php");
	require_once("project_reader.php");
	readProject(getProjectName($projects, $folder, $article));
}
else if($_GET["url"] == "index.html")
	header("Location: http://www.revs0.com");
else if($_GET["url"] == "sendMail")
	require_once("send_mail.php");
else if($_GET["url"] == "editProject")
	require_once("project_edit.php");
else if($_GET["url"] == "css/theme")
{
    header("Content-type: text/css");
    readfile("theme.css");
}
else if($_GET["url"] == "css/fonts")
{
    header("Content-type: text/css");
    readfile("fonts.css");
}
else if($_GET["url"] == "img/home1.png")
{
	header("Content-type: image/png");
	readfile("images/h1.png");
}
else if($_GET["url"] == "img/home2.png")
{
	header("Content-type: image/png");
	readfile("images/h2.png");
}
else if($_GET["url"] == "img/home3.png")
{
	header("Content-type: image/png");
	readfile("images/h3.png");
}
else if($_GET["url"] == "img/home4.png")
{
	header("Content-type: image/png");
	readfile("images/h4.png");
}
else if($_GET["url"] == "img/background.png")
{
	header("Content-type: image/png");
	readfile("images/bg.png");
}
else if($_GET["url"] == "favicon.ico")
{
	header("Content-type: image/x-icon");
	readfile("favicon.ico");
}
else if($_GET["url"] == "img/loading.gif")
{
	header("Content-type: image/gif");
	readfile("images/loading.gif");
}
else if($_GET["url"] == "main.js")
{
	header("Content-type: application/javascript");
	readfile("main.js");
}
else if($_GET["url"] == "jquery.js")
{
	header("Content-type: application/javascript");
	readfile("jquery-1.11.3.min.js");
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
	readfile($_GET["url"]);
else if($_GET["url"] == "js/breath")
    readfile("breath.js");
else if($_GET["url"] == "debug/globals")
    include("globals.php");
else
{
	// Grabbing articles to get the correct item
	include("project_tools.php");
	//FIXME
	// Potential security breach
	$projectFile = searchForProject($_GET["url"]);
	if($projectFile == false)
		header("Location: /");
	else
	{
		require("project_list.php");
		include("index.html");
	}
}
?>
