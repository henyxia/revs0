<?php
// Authenticating
require_once("project_members.php");
$user = base64_decode($_POST["sender"]);
$password = hash("whirlpool", base64_decode($_POST["sender"]).":".$_POST["password"]);
$userCount = count($users);
echo "Received user ".$user." searching him through the ".$userCount." users";
for($i=0; $i<$userCount; $i++)
	if($user == $users[$i]["name"])
		userFound($i);
die("User not found");

function userFound($uid)
{
	echo "Found user " . $users[$i];
}
