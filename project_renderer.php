<?php
function renderProject($project)
{
?>
<br />
<div id="projectContent">
	<h2><?php echo $project->status->name; ?></h2>
	<p><?php echo $project->content; ?></p>
</div>
<div id="projectSidebar">
	<div class="projectStatus">
		<div class="projectStatusTitle">
			<h2>Project Status</h2>
		</div>
		<div class="projectStatusHeadline">
			<h3>
				State <i class="tooltip" data-tool="Propostion: the project exists but has not started yet">
					<i class="icon icon-question-sign"></i>
				</i>
			</h3>
			<p 
<?php
$state = $project->status->state;
if($state == "Proposition")
	echo 'class="info">';
else if($state == "In Progress")
	echo 'class="warning">';
else if($state == "Finished")
	echo 'class="success">';
else
	echo '>Potential error : ';
echo $state;
?>

			</p>
			<h3>Redaction <i class="icon icon-question-sign"></i></h3>
			<p 
<?php
$redaction = $project->status->redaction;
if($redaction == "Not Started")
	echo 'class="error">';
else if($redaction == "In Progress")
	echo 'class="warning">';
else if($redaction == "Done")
	echo 'class="success">';
else
	echo '>Potential error : ';
echo $redaction;
?>
			</p>
			<h3><?php echo count($project->status->creators->creator) > 1 ? "Creators" : "Creator"; ?></h3>
			<ul>
<?php
$authors = count($project->status->creators->creator);
for($i=0; $i<$authors; $i++)
	echo "<li>".$project->status->creators->creator[$i]."</li>";
?>
			</ul>
			<h3>Keywords</h3>
			<ul>
<?php
$keywords = count($project->status->keywords->keyword);
for($i=0; $i<$keywords; $i++)
	echo "<li>".$project->status->keywords->keyword[$i]."</li>";
?>
			</ul>

		</div>
	</div>
</div>
<br />
<?php
}
?>
