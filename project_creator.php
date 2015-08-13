<?php
// Authenticating
require_once("project_members.php");
require_once("project_tools.php");
$user = base64_decode($_POST["sender"]);
$password = hash("whirlpool", base64_decode($_POST["sender"]).":".$_POST["password"]);
$userCount = count($users);
for($i=0; $i<$userCount; $i++)
	if($user == $users[$i]["user"])
		if($users[$i]["pass"] == $password)
			userFound($i);//, $_POST["project"], $_POST["content"]);
		else
			die("Bad password");
die("User not found");

function userFound($uid)//, $eProject, $eContent)
{
	// Searching for the project
	$projectObject = new Project();

	// Generating new project
	$projectObject->content = "";
	$projectObject->status->redactionRevision = 1;
	$projectObject->status->name = base64_decode($_POST['project']);
	$projectObject->status->state = base64_decode($_POST['state']);
	$projectObject->status->redaction = base64_decode($_POST['redaction']);
	$projectObject->status->creators = explode(";", base64_decode($_POST['creators']));
	$projectObject->status->keywords = explode(";", base64_decode($_POST['keywords']));
	file_put_contents("projects/".base64_decode($_POST['fold']).'_'.base64_decode($_POST['arti']).".pro",
		serialize($projectObject));

	// Finishing
	die("Done");
}
