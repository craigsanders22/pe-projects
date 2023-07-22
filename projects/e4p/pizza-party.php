
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
		$leftovers = "If everything goes as planned, you won't have a single slice to spare! <br> (You should probably get another pizza, pal!)";

	} else {
		$leftovers = "If everything goes as planned, you'll have $extraslices slices to spare!";
	}

 ?>

<form method="POST">


	<h2>PIZZA PARTY!</h2>
	
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


	<h3><?= $summary ?></h3>

	<h2><?= $solution ?></h2> 

	<h3><?= $leftovers ?></h3>

</form>


<style>

	form {
		
		padding-left: 100px;
		max-width: 700px;
	}

	.field {

		max-width: 300px;
		display: flex;
		flex-direction: column;
	}

	.field label {
		font-size: 16px;
		font-family: sans-serif;
		margin-bottom: 5px;
	}


	button[type="submit"], .field + .field {
		margin-top: 20px;
	}

	h2 {
		font-family:didot;
		color: darkgreen;
		font-size: 32px;
		font-weight: 700;
		letter-spacing: 1.2;
		text-decoration: none;
		margin-top: 100px;	
	}

	h3 {
		font-family: didot;
		color: black;
		font-size: 20px;
		font-weight: 500;
		margin-top: 40px;
	}

	b {
		color: red;
	}

	p {
		font-size: 16px;
		font-weight: 400;
	}


</style>
