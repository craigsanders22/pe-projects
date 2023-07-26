<?php include('flower_data.php'); ?>

<div class="inner-column">


<h1>Currently out in the field at Flower Zone </h1>


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
			<h3 class='genus'>Breed: <?=$flower["genus"]?></h3>
			<h3 class='plant-type'>Plant Type:<?=$flower["plant-type"]?></h3>
			<h3 class='season'>Growing Season:<?=$flower["season"]?></h3>
			<h3 class='color'>Color: <?=$flower["color"]?></h3>
			<h2 class='price'>Price per stem: <?=$price?></h2>
			<a href='?page=detail&flower=<?=$flower["id"]?>'>Check it out</a>
	
		

		</flower-card>
	</li>
<?php } ?>
</ul>

</div>
