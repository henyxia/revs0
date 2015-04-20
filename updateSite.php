<?php
if(file_put_contents("../git/master.zip", fopen("https://github.com/henyxia/revs0/archive/master.zip", 'r')) == false)
    die("Unable to download the last update");
$file = '../git/master.zip';
$path = pathinfo(realpath($file), PATHINFO_DIRNAME);
$zip = new ZipArchive;
$res = $zip->open($file);
if ($res === TRUE)
{
  $zip->extractTo($path);
  $zip->close();
  echo "$file was successfully extracted to $path";
}
else
{
  die("Error, couldn't open $file");
}