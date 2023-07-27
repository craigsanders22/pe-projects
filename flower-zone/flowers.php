<?php include('flower_data.php'); ?>

<div class="inner-column">

<div class="headline">

<h1>Currently out in the field at Flower Zone </h1>
</div>

	<ul>
	
	<?php foreach ($flower_data as $flower) { ?>
		<?php 
		$price = "$" . number_format($flower["price"], 2, ".", ",");
		?>

		<li class='flower'>
		<flower-card>
			<picture>
				<img src="./assets/<?=$flower["img"]?>"/>
			</picture>
			<h1 class='name'><?=$flower["name"]?></h1>
			<p class='genus'>Breed: <?=$flower["genus"]?></p>
			<p class='plant-type'>Plant Type: <?=$flower["plant-type"]?></p>
			<p class='season'>Growing Season: <?=$flower["season"]?></p>
			<p class='color'>Color: <?=$flower["color"]?></p>
			<h2 class='price'>Price per stem: <?=$price?></h2>
			<a href='?page=detail&flower=<?=$flower["id"]?>'>Check it out</a>
	
		</flower-card>
	</li>
	<?php } ?>
	</ul>
</div>
