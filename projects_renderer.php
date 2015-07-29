<?php

function renderProject($project)
{
?>
<br />
<div id="projectContent">
	<h2><?php echo $project["name"]; ?></h2>
	<p><?php echo $project["content"]; ?></p>
</div>
<div id="projectSidebar">
	<div class="projectStatus">
		<div class="projectStatusTitle">
			<h2>Project Status</h2>
		</div>
		<div class="projectStatusHeadline">
			<h3>State</h3>
			<p><?php echo $project["state"]; ?></p>
			<h3>Redaction</h3>
			<p><?php echo $project["redaction"]; ?></p>
			<h3><?php echo count($project["creators"]) > 1 ? "Creators" : "Creator"; ?></h3>
			<ul>
<?php
$authors = count($project["creators"]);
for($i=0; $i<$authors; $i++)
	echo "<li>".$project["creators"][$i]."</li>";
?>
			</ul>
			<h3>Keywords</h3>
			<ul>
<?php
$keywords = count($project["keywords"]);
for($i=0; $i<$keywords; $i++)
	echo "<li>".$project["keywords"][$i]."</li>";
?>
			</ul>

		</div>
	</div>
</div>
<br />
<?php
}
?>
