<?php
require_once("project_renderer.php");

function readProject($projectName)
{
	if(file_exists("projects/".$projectName.".xml"))
	{
		$project = simplexml_load_file("projects/".$projectName.".xml");
		renderProject($project);
	}
	else
		include("project_not_found.php");
}
