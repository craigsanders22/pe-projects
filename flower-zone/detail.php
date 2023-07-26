
<?php include('flower_data.php'); ?>

<?php 

	if ( isset($_GET["flower"]) ) {
		$current_flower_id = $_GET["flower"];
	}


	foreach ($flower_data as $flower) {
		if ($current_flower_id == $flower["id"] ) {
		$detail = $flower;
		$price = number_format($detail["price"], 3, ".", ",");

	}
	}
 ?>

 <?php if ( isset($detail) ) { ?>

 
 <div class="inner-column">
 	<div class="flower-card">


	<h1><?=$detail["name"]?></h1>
	<picture>
		<img src="./assets/<?=$detail["img"]?>"/>
	</picture>


	<h3>Genus: <?=$detail["genus"]?></h3>
	<h3>Plant Type: <?=$detail["plant-type"]?></h3>
	<h3>Growing Season: <?=$detail["season"]?></h3>
	<h3>Available colors: <?=$detail["color"]?></h3>

	<h2>Price Per Stem: $<?=$detail["price"]?></h2>



	<h2><a href="https://www.wufoo.com/gallery/templates/online-orders/flowers-order-form/">Order Here!</a></h2>


	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sint quibusdam deleniti, earum facilis aspernatur numquam, quos veritatis, dolorem corrupti voluptate consectetur nam. Quia ad veritatis, iure blanditiis error, voluptas?</p>

	<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Dolore exercitationem maxime soluta porro sed voluptatibus corrupti, culpa fuga, sapiente qui, voluptates cupiditate quasi quia hic reiciendis fugit? Vel, eum voluptate.</p>

</div>

<?php } else { ?>

	<h1>Nothing Found!</h1>
	<p>Try to look for something back on our <a href="?page=flowers">Flower List!</a></p>

<?php } ?>

</div>