<link rel="stylesheet" href="../style.css">



<?php
	$heading = $project['heading'];
	$description = $project['description'];
	$thumbnail = $project['thumbnail'];
	$link = $project['link'];
?>

<link rel="stylesheet" href="../style.css">

<div class="inner-column">
<project class='project-card'>
	<picture>
		<img src='../../../assets/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>
		<a href='../projects/<?=$link?>'> Find out More!</a>
  
	</text-content>
</project>
</div>
