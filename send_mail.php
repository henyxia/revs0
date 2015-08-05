<?php
$content = "The address \"".base64_decode($_POST["sender"])."\" want to send you the following message

".base64_decode($_POST["content"]);

$headers ='From: website@revs0.com'."\n";
$headers .='Reply-To: website@revs0.com'."\n";
$headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
$headers .='Content-Transfer-Encoding: 8bit';
if(mail('henyxia@live.fr', 'You received a message from REVS0', $content, $headers))
	die("success");
else
	die("fail");

