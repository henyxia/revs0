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
define("MAX_LEN", 14);

function short_name($str, $limit)
{
	if ($limit < 3)
		$limit = 3;
	if (strlen($str) > $limit)
		return substr($str, 0, $limit - 3) . '...';
	else
		return $str;
}

$src = "../git/revs0-master/";
$dst = "../www/";
$GLOBALS["numberOfFiles"] = 0;

function scan_dirs($dir)
{
	if (is_dir($dir))
	{
		if ($dh = opendir($dir))
		{
			while (($file = readdir($dh)) !== false)
			{
				$type = filetype($dir.$file);
				if($type == "dir")
				{
					if($file == ".")
						continue;
					if($file == "..")
						continue;
					scan_dirs($dir.$file."/");
				}
				elseif($type == "file")
				{
					$GLOBALS["files"][$GLOBALS["numberOfFiles"]] = $dir.$file;
					$GLOBALS["numberOfFiles"]++;
				}
				else
					echo "U\t".short_name($file, MAX_LEN)."\tPDC";
			}
			closedir($dh);
		}
	}
	else
		die("Something bad happened");
}

scan_dirs($src);
var_dump($GLOBALS["files"]);

for($i=0; $i<$GLOBALS["numberOfFiles"]; $i++)
	$GLOBALS["target"][$i] = preg_replace("/".preg_quote($src, '/')."/", $dst, $GLOBALS["files"][$i]);

var_dump($GLOBALS["target"]);
for($i=0; $i<$GLOBALS["numberOfFiles"]; $i++)
{
    if (file_exists($GLOBALS["target"][$i])) {
        $originalHash = md5_file($GLOBALS["files"][$i]);
        $destinationHash = md5_file($GLOBALS["target"][$i]);
        if ($originalHash === $destinationHash)
		{
			echo "OK\tNo need to update ".$GLOBALS["target"][$i]."\n";
            continue;
        }
    }
    echo "SYNC\tUpdating ".$GLOBALS["files"][$i]." -> ".$GLOBALS["target"][$i]."\n";
	if(!file_exists(dirname($GLOBALS["target"][$i])))
		mkdir(dirname($GLOBALS["target"][$i]), 0775, true);
    copy($GLOBALS["files"][$i], $GLOBALS["target"][$i]);
}
echo "</pre>";
