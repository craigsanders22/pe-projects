<?php

	$orderamount = 0;
	$state = "";
	$subtotal = 0;
	$tax = ".055%";
	$solution = "";
	


	if ( isset($_POST["submitted"]) ) {

		$orderamount = $_POST["orderamount"]; 
		$state = $_POST["state"];
		$subtotal = $_POST["orderamount"];
		$tax = $subtotal * $tax;
		$instate = $subtotal + $tax;
	}

	
	if ($state == "WI") {
		$summary = "Your order is $$orderamount and you are in the state of $state. <br> Your tax is $$tax";
		$solution = "The total is: $$instate";
		
	}
	else {
		$summary = "Your order is $orderamount and you are in the state of $state.";

		$solution = "The total is: $$orderamount";
	}
	
 ?>

<form method="POST">


	<h2>Pay the Tax Man (only in Wisconsin!)</h2>

	<p>Here in Wisconsin, we collect 5.5% sales tax. <br>
	But if you're anywhere else, no sales tax at all!</p>
	
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


	<h3>Results:</h3>

	<h3><?= $summary ?></h3>

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
		margin-top: 60px;	
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
