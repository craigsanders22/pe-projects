<?php

	$orderamount = 1;
	$state = WI;
	$subtotal = 1;
	$tax = .55;
	$solution = "";



	$subtotal = "The subtotal is $orderamount";

	$instate = $subtotal * $tax;


	


	if ( isset($_POST["submitted"]) ) {

		$orderamount = $_POST["orderamount"]; 
		$state = $_POST["state"];
		$subtotal = ["subtotal"];
		


	}

	
	if ($state == WI) {
		$solution = "The total is: $instate";
	}

	 
	
	



 ?>

<form method="POST">


	<h2>Pay the Tax Man (only in Wisconsin!)</h2>

	<p>Here in Wisconsin, we collect 5.5% sales tax. But if you're anywhere else, no sales tax at all!</p>
	
	<div class='field'>
	
		<label>Order Amount</label>
		<input type="number" name="orderamount" value="<?=$orderamount?>">	

	</div>

	<div class='field'>
	
		<label>What state are you in?</label>
		<input type="text" id="state" maxlength="2" name="state" value="<?=$state?>">	

	</div>

	

	<button type="submit" name="submitted">
		Audit Me
	</button>

	<h2><?= $subtotal ?></h2>

	<h2><?= $solution ?></h2> 


</form>


<style>

	form {
		
		padding-left: 200px;
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
