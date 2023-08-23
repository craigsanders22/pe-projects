

<?php
	$heading = $project['heading'];
	$description = $project['description'];
	$thumbnail = $project['thumbnail'];
	$link = $project['link'];
?>
<section class='project-card'>
<div class="inner-column">

	<picture>
		<img src='<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>
		<a href='<?=$link?>'> Find out More!</a>
  
	</text-content>
</div>

</div>
</section>