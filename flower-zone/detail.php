
<?php include('flower_data.php'); ?>

<?php 

	if ( isset($_GET["flower"]) ) {
		$current_flower_id = $_GET["flower"];
	}


	foreach ($flower_data as $flower) {
		if ($current_flower_id == $flower["id"] ) {
		$detail = $flower;
		$price = "$" . number_format($detail["price"], 2, ".", ",");

	}
	}
 ?>

 <?php if ( isset($detail) ) { ?>

 
 <div class="inner-column">


	<h1><?=$detail["name"]?></h1>
	<picture>
		<img src="./assets/<?=$detail["img"]?>"/>
	</picture>


	<h3>Genus: <?=$detail["genus"]?></h3>
	<h3>Plant Type: <?=$detail["plant-type"]?></h3>
	<h3>Growing Season: <?=$detail["season"]?></h3>
	<h3>Available colors: <?=$detail["color"]?></h3>

	<h2>Price Per Stem: $<?=$detail["price"]?></h2>




<?php } else { ?>

	<h1>Nothing Found!</h1>
	<p>Try to look for something back on our <a href="?page=flowers">Flower List!</a></p>

<?php } ?>

</div>