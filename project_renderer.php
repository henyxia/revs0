<?php
function renderProject($project)
{
?>
<br />
<div id="projectContent">
	<h2><?php echo $project->status->name; ?></h2>
	<br />
	<div id="projectContentFinal"><?php
$content = $project->content;
// Processing headlines
$content = preg_replace("/^[\=]{1}([ \w]+)\={1}/m", "<h1>$1</h1>", $content);
$content = preg_replace("/^[\=]{2}([ \w]+)\={2}/m", "<h2>$1</h2>", $content);
$content = preg_replace("/^[\=]{3}([ \w]+)\={3}/m", "<h3>$1</h3>", $content);
// Processing URLs
$content = preg_replace("/\[((http\:\/\/|https\:\/\/|ftp\:\/\/)([\w\.\/\-\?\=]*))\]/m",
	"<a href=\"$1\">[Link]</a>", $content);
$content = preg_replace("/\[((http\:\/\/|https\:\/\/|ftp\:\/\/)([\w\.\/\-\?\=]*))\ ([\ \w]+)\]/m",
	"<a href=\"$1\">$4</a>", $content);
// Processing lists
$content = preg_replace("/^[\*]{1}\ ([ \w\'\(\)\-\,\.\/]+)/m", "<ul><li>$1</li></ul>", $content);
$content = preg_replace("/^[\*]{2}\ ([ \w\'\(\)\-\,\.\/]+)/m", "<ul><li>$1</li></ul>", $content);
$content = preg_replace("/^[\*]{3}\ ([ \w\'\(\)\-\,\.\/]+)/m", "<ul><li>$1</li></ul>", $content);
// Rendering
echo $content;
?></div>
	<textarea id="projectContentEdit" style="display:none;">
	</textarea>
</div>
<div id="projectSidebar">
	<div class="projectStatus">
		<div class="projectStatusTitle">
			<h2>Project Status</h2>
		</div>
		<div class="projectStatusHeadline">
			<h3>
				State <i class="tooltip" data-tool="
<?php
$state = $project->status->state;
if($state == "Proposition")
	echo 'Propostion: the project exists but has not started yet';
else if($state == "In Progress")
	echo 'In Progress: the project is currently elvolving';
else if($state == "Finished")
	echo 'Finished: the project is finished and won\'t evolve anymore';
else
	echo '>Potential error : ';
?>
				">
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
			<h3><?php echo count($project->status->creators) > 1 ? "Creators" : "Creator"; ?></h3>
			<ul>
<?php
$authors = count($project->status->creators);
for($i=0; $i<$authors; $i++)
	echo "<li>".$project->status->creators[$i]."</li>";
?>
			</ul>
			<h3>Keywords</h3>
			<ul>
<?php
$keywords = count($project->status->keywords);
for($i=0; $i<$keywords; $i++)
	echo "<li>".$project->status->keywords[$i]."</li>";
?>
			</ul>

		</div>
	</div>
</div>
<br />
<?php
}
?>
