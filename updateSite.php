<?php
if(file_put_contents("git/master.zip", fopen("https://github.com/henyxia/revs0/archive/master.zip", 'r')) == false)
    return 1;
else
    return 0;