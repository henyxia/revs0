<?php
if(file_put_contents("git/master.zip", fopen("https://github.com/henyxia/revs0/archive/master.zip", 'r')) == false)
    echo 1;
else
    echo 0;