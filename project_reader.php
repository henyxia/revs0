<?php
require_once("project_class.php");
require_once("project_renderer.php");

function readProject($projectName)
{
	if(file_exists("projects/".$projectName.".pro"))
	{
		$project = unserialize(file_get_contents("projects/".$projectName.".pro"));
		renderProject($project);
	}
	else
		include("project_not_found.php");
}
