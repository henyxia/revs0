<?php
if($_GET["url"] == "")
    include("index.php");
else if($_GET["url"] == "index.php")
    header("Location: http://www.revs0.com");
else if($_GET["url"] == "css/theme")
{
    header("Content-type: text/css");
    include("theme.css");
}
else if($_GET["url"] == "js/breath")
    include("breath.js");
else if($_GET["url"] == "debug/globals")
    include("globals.php");
else
    header("Location: http://www.revs0.com");
?>