<?php
echo "<pre>";
echo "Getting last update\n";
if(file_put_contents("../git/master.zip", fopen("https://github.com/henyxia/revs0/archive/master.zip", 'r')) == false)
    die("Unable to download the last update");
echo "Extracting last update\n";
$file = '../git/master.zip';
$path = pathinfo(realpath($file), PATHINFO_DIRNAME);
$zip = new ZipArchive;
$res = $zip->open($file);
if ($res === TRUE)
{
  $zip->extractTo($path);
  $zip->close();
  echo "$file was successfully extracted to $path\n";
}
else
{
  die("Error, couldn't open $file");
}
echo "Syncing last update\n";
$source = '../git/revs0-master/';
$destination = '../www/';

//$sourceFiles = glob($source . '*');
//$sourceFiles = glob($source. '{,.}*{/}*', GLOB_BRACE);
$sourceFiles = glob($source.'{*,./*/*}', GLOB_BRACE);

foreach($sourceFiles as $file) {

    $baseFile = basename($file);

    if (file_exists($destination . $baseFile)) {

        $originalHash = md5_file($file);
        $destinationHash = md5_file($destination . $baseFile);
        if ($originalHash === $destinationHash)
		{
			echo "OK\tNo need to update ".$file."\n";
            continue;
        }

    }
    echo "SYNC\tUpdating ".$file." -> ". $destination . $baseFile."\n";
    copy($file, $destination . $baseFile);
}
echo "</pre>";
