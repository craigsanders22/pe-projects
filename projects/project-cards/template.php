
<?php
	$heading = $projects['heading'];
	$description = $projects['description'];
	$thumbnail = $projects['thumbnail'];
?>

<project class='project-card'>
	<picture>
		<img src='images/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>

		<a class='button' href='#'>Shop Now</a>
	</text-content>
</project>
