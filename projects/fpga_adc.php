<?php
require_once("projects_renderer.php");

$project["name"] = "Building a low cost ADC for a FPGA";
$project["state"] = "Done";
$project["redaction"] = "In Progress";
$project["creators"][0] = "Jean Wasilewski";
$project["creators"][1] = "Pierre Letousey";
$project["keywords"][0] = "FPGA";
$project["keywords"][1] = "Analog / Digital Converter";
$project["content"] = "In progress";

renderProject($project);
