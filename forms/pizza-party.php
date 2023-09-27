<<?php include 'form-header.php' ?>
<?php

	$guests = 4;
	$slicesperperson = 4;
	$slicesperpizza = 8;
	$summary = "";
	$solution = "";
	$totalslices = "";
	$extraslices = "";


	if ( isset($_POST["submitted"]) ) {

		$guests = $_POST["guests"]; 
		$slicesperperson = $_POST["slices"];
		$slicesperpizza = $_POST["pizza"];
	}

 
	$summary = "You'll have <b>$guests guests</b> with <b>$slicesperperson slices</b> of pizza per guest and <b>$slicesperpizza slices</b> per pizza.";

	 $roundedpizza =  ceil(($guests * $slicesperperson) / $slicesperpizza);
	 $totalslices = $slicesperpizza * $roundedpizza;
	 $neededslices = $guests * $slicesperperson;
	 $extraslices = $totalslices - $neededslices;

	if ($roundedpizza == 1) {
		$solution = "You're going to need $roundedpizza pizza";

	} else {
		$solution = "You're going to need $roundedpizza pizzas";
	}


	if ($extraslices == 0) {
		$leftovers = "If everything goes as planned, you won't have a single slice to spare! <br> <br>(You should probably get another pizza, pal!)";

	} else {
		$leftovers = "If everything goes as planned, you'll have $extraslices slices to spare!";
	}

 ?>

<title>Pizza Party</title>



<body>
	<div class="container">
		<div class="inner-column">
<form method="POST">


	<h1>PIZZA PARTY!</h1>
	
	<div class='field'>
	
		<label>How many guests?</label>
		<input type="number" name="guests" value="<?=$guests?>">	

	</div>

	<div class='field'>
	
		<label>How many slices per guest?</label>
		<input type="number" name="slices" value="<?=$slicesperperson?>">	

	</div>

	<div class='field'>
	
		<label>How many slices in each pizza pie?</label>
		<input type="number" name="pizza" min="6" max="20" value="<?=$slicesperpizza ?>">

	</div>

	<button type="submit" name="submitted">
		Let's Party!
	</button>


	<h4><?= $summary ?></h4>

	<h2><?= $solution ?></h2> 

	<h3><?= $leftovers ?></h3>



	


</form>

</div>
</div>
</body>



