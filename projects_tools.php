<?php

function getProjectName($projects, $folder, $name)
{
	for($i=0; $i<count($projects); $i++)
		if($projects[$i]["fold"] == $folder &&
			$projects[$i]["arti"] == $name)
			return $folder."_".$name.".php";
	return "project_not_found.php";
}
