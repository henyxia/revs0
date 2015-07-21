<?php
//$projects["number"]		= 7;
$projects[0]["name"]	= "ADC for FPGA";
$projects[0]["prog"]	= false;
$projects[0]["elec"]	= true;
$projects[0]["fpga"]	= true;
$projects[0]["othe"]	= false;
$projects[1]["name"]	= "Lego NXT MindStorm Grabber";
$projects[1]["prog"]	= true;
$projects[1]["elec"]	= false;
$projects[1]["fpga"]	= false;
$projects[1]["othe"]	= false;
$projects[2]["name"]	= "Automatic robotic arm";
$projects[2]["prog"]	= true;
$projects[2]["elec"]	= true;
$projects[2]["fpga"]	= false;
$projects[2]["othe"]	= false;
$projects[3]["name"]	= "VGA for FPGA";
$projects[3]["prog"]	= false;
$projects[3]["elec"]	= false;
$projects[3]["fpga"]	= true;
$projects[3]["othe"]	= false;
$projects[4]["name"]	= "The tweek project";
$projects[4]["prog"]	= true;
$projects[4]["elec"]	= true;
$projects[4]["fpga"]	= false;
$projects[4]["othe"]	= true;
$projects[5]["name"]	= "Stereo HiFi amplifier";
$projects[5]["prog"]	= false;
$projects[5]["elec"]	= true;
$projects[5]["fpga"]	= false;
$projects[5]["othe"]	= false;
$projects[6]["name"]	= "Arduino radio";
$projects[6]["prog"]	= true;
$projects[6]["elec"]	= true;
$projects[6]["fpga"]	= false;
$projects[6]["othe"]	= true;
$projects[7]["name"]	= "This website";
$projects[7]["prog"]	= true;
$projects[7]["elec"]	= false;
$projects[7]["fpga"]	= false;
$projects[7]["othe"]	= false;

usort($projects, "custom_sort");
function custom_sort($a,$b)
{
	return $a['name']>$b['name'];
}
