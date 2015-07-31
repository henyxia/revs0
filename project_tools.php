<?php

function urlFy($name)
{
	return preg_replace('/\ /', '_', $name);
}

function getProjectName($projects, $folder, $name)
{
	for($i=0; $i<count($projects); $i++)
		if($projects[$i]["fold"] == $folder &&
			$projects[$i]["arti"] == $name)
			return $folder."_".$name;
	return "project_not_found.php";
}

function searchForProject($projectName)
{
	$files = scandir("projects");
	$filesNumber = count($files);
	for($i=0; $i<$filesNumber; $i++)
	{
		$fileParts = pathinfo($files[$i]);
		if($fileParts['extension'] == "xml")
		{
			//DEBUG
			//echo "The file ".$files[$i]." is a XML\n";
			$project = simplexml_load_file("projects/".$files[$i]);
			if(urlFy($project->status->name) == $projectName)
				return $fileParts["filename"];
		}
		//DEBUG
		//else
			//echo "The file ".$files[$i]." is not a XML\n";
	}
	return false;
}
