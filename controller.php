<?php
if($_GET["url"] == "")
    set_include_path(set_include_path()."/home/ovh/shared/__ovh/fr/welcome.html");
else
    require_once("globals.php")
?>