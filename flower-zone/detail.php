
<?php include('flower_data.php'); ?>

<?php 

	if ( isset($_GET["flower"]) ) {
		$current_flower_id = $_GET["flower"];
	}


	foreach ($flower_data as $flower) {
		if ($current_flower_id == $flower["id"] ) {
		$detail = $flower;

	}
	}
 ?>

 <?php if ( isset($detail) ) { ?>

 


	<h1><?=$detail["name"]?></h1>
	<picture>
		<img src="./assets/<?=$detail["img"]?>"/>
	</picture>
	

	<h3>Genus: <?=$detail["genus"]?></h3>
	<h3>Plant Type: <?=$detail["plant-type"]?></h3>
	<h3>Growing Season: <?=$detail["season"]?></h3>
	<h3>Available colors: <?=$detail["color"]?></h1>

	<h2>Price Per Stem: $<?=$detail["price"]?></h2>


	<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda quo esse sint provident voluptatem saepe libero harum suscipit, ullam unde deserunt officiis aut, quaerat velit laborum in hic dignissimos a.</p>


<?php } else { ?>

	<h1>Nothing Found!</h1>
	<p>Try to look for something back on our <a href="?page=flowers">Flower List!</a></p>

<?php } ?>