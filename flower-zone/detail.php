
<?php include('flower_data.php'); ?>

<?php 

	if ( isset($_GET["flower"]) ) {
		$current_flower_id = $_GET["flower"];
	}

	echo $current_flower_id;

	foreach ($flower_data as $flower) {
		if ($current_flower_id == $flower["id"] ) {
		$detail = $flower;

	}
	}
 ?>

 <?php if ( isset($detail) ) { ?>

 


	<h1><?=$detail["name"]?></h1>

	<picture>
		<img src="https://shop.floretflowers.com/cdn/shop/products/Benary_s_Giant_Coral_Floret-2_768x.jpg?v=1624470068" alt="Giant Coral Zinnia">
	</picture>

	<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda quo esse sint provident voluptatem saepe libero harum suscipit, ullam unde deserunt officiis aut, quaerat velit laborum in hic dignissimos a.</p>


<?php } else { ?>

	<h1>Nothing Found!</h1>
	<p>Try to look for something back on our <a href="?page=flowers">Flower List!</a></p>

<?php } ?>