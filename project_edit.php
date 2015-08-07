<?php
// Authenticating
require_once("project_members.php");
require_once("project_tools.php");
$user = base64_decode($_POST["sender"]);
$password = hash("whirlpool", base64_decode($_POST["sender"]).":".$_POST["password"]);
$userCount = count($users);
for($i=0; $i<$userCount; $i++)
	if($user == $users[$i]["user"])
		userFound($i, $_POST["project"], $_POST["content"]);
die("User not found");

function userFound($uid, $eProject, $eContent)
{
	// Intro
	//echo "Found user " . $users[$i];

	// Searching for the project
	//echo "Project received is ".base64_decode($eProject);
	$project = searchForProject(urlFy(base64_decode($eProject)));
	if($project == false)
		die("This project does not exist");

	// Autentication
	
	// Archiving old file
	//echo "Current file is ".$project;
	copy("projects/".$project.".pro", "projects/".$project.".prp");

	// Generating new project
	$projectObject = unserialize(file_get_contents("projects/".$project.".pro"));
	$projectObject->content = base64_decode($eContent);
	$projectObject->status->redactionRevision++;
	file_put_contents("projects/".$project.".pro", serialize($projectObject));

	// Calculating diff
	xdiff_file_diff("projects/".$project.".prp", "projects/".$project.".pro", "projectsLog/".$project."."
		.($projectObject->status->redactionRevision-1));


	// Cleaning
	// unlink("projects/".$project.".prp");

	// Finishing
	die("Done");
}
