<?php include 'form-header.php' ?>

<?php

$orderamount = 0;
$state = "";
$subtotal = 0;
$tax = .055;
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
	$summary = "Your order is $$orderamount and you are in the state of $state.";

	$solution = "The total is: $$orderamount";
}

?>


<title>Tax Calculator</title>

</head>

<body>
	<div class="container">
		<div class="inner-column">
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
				<br>
				<br>

				<h3>Results:</h3>

				<h3><?= $summary ?></h3>

				<h2><?= $solution ?></h2> 


			</form>
		</div>
	</div>



