<?php include('flower_data.php'); ?>

<h1>Here are some of the flowers that we are growing! </h1>


<ul>
	

	<?php foreach ($flower_data as $flower) { ?>
		<?php 
		$price = "$" . number_format($flower["price"], 2, ".", ",");
		?>

	<li class='flower'>
		<flower-card>
			<h1 class='name'>Name: <?=$flower["name"]?></h1>
			<h3 class='genus'>Breed: <?=$flower["genus"]?></h3>
			<h3 class='plant-type'>Plant Type:<?=$flower["plant-type"]?></h3>
			<h3 class='season'>Growing Season:<?=$flower["season"]?></h3>
			<h4 class='color'>Color: <?=$flower["color"]?></h4>
			<h2 class='price'>Price per stem: <?=$price?></h2>
			<a href='?page=detail&flower=<?=$flower["id"]?>'>Check it out</a>
		</flower-card>
	</li>
<?php } ?>
</ul>

