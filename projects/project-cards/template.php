
<?php
	$heading = $project['heading'];
	$description = $project['description'];
	$thumbnail = $project['thumbnail'];
?>

<project class='project-card'>
	<picture>
		<img src='../../assets/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>

		<a class='button' href='#'>Shop Now</a>
	</text-content>
</project>
