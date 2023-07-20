
<?php

	$guests = 2;
	$slicesperperson = 2;
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

	$solution = "You're going to need $roundedpizza pizzas!";
	$leftovers = "If everything goes as planned, you'll have $extraslices slices to spare!";




 ?>



<form method="POST">

	

	<h2>Pizza Party!</h2>
	
	<div class='field'>
	
		<label>How many guests?</label>
		<input type="number" name="guests" value="<?=$guests?>">	

	</div>

	<div class='field'>
	
		<label>How many slices per guest?</label>
		<input type="number" name="slices" value="<?=$slicesperperson?>">	

	</div>

	<div class='field'>
	
		<label>How many slices per pizza?</label>
		<input type="number" name="pizza" value="<?=$slicesperpizza ?>">

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
		padding-top: 25px;
		padding-left: 200px;
		max-width: 800px;
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
		
	}

	h3 {
		font-family: didot;
		color: black;
		font-size: 20px;
		font-weight: 500;
		margin-top: 60px;
	}

	b {
		color: red;
	}

	p {
		font-size: 16px;
		font-weight: 400;
	}


</style>
