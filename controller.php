<?php
if($_GET["url"] == "")
    include("index.php");
else if($_GET["url"] == "index.php")
    header("Location: http://www.revs0.com");
else
    require_once("globals.php");
?>