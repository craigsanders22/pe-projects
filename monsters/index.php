<?php include ('monsters.php'); ?>
<?php include ('styles.php'); ?>

<ul class='monsters'>


<?php
$adoptionlist = [$codey, $limabean, $fragoo, $orangina, $shadow, $mrbanana, ];


 foreach ($adoptionlist as $monster) { ?>
	
	<?php	

	$id = $monster["id"];
	$name = $monster["name"];
	$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old!";
	$portrait = $monster["portrait"];
	$status = $monster["adopted"];

	if ($status == 0) {
		$status = "Adopt Me!! I'd love to come destroy your forever home!";

	} else {
		$status = "Hooray! I'm now destroying someone else's home!";

	}

	?>


<li class = 'monster'>
	<div style='" . $monster . "' class='inner-column'>
	<monster-card id='<?=$id?>'>
	<picture class='portrait'>
		<img src='<?=$portrait?>' width='300'>
	<h2 class= 'name'><?=$name?></h2>
	<p class= 'story'><?=$story?></p>
	<p class= 'status'><?=$status?></p>

	</monster-card>

</li>


<?php } ?>


</ul>
