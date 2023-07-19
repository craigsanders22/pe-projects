


<style>

	form {
		max-width: 500px;
	}

	.field {

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
		color: darkblue;
		font-size: 32px;
		font-weight: 700;
		letter-spacing: 1.2;
		text-decoration: underline;
	}

	h3 {
		font-family: didot;
		color: darkblue;
		font-size: 24px;
		font-weight: 700;
		letter-spacing: 1.2;
		text-decoration: underline;
		margin-top: 100px;
	}

	p {
		font-size: 16px;
		font-weight: 400;
	}


</style>

<form method="POST">



	<h2>Simple Math Form</h2>
	
	<div class='field'>
	
		<label>What is the first number?</label>
		<input type="number" name="first" value="0">	

	</div>

	<div class='field'>
	
		<label>What is the second number?</label>
		<input type="number" name="second" value="0">	

	</div>

	<button type="submit" name="submitted">
		Compute
	</button>





</form>

<?php




	if ( isset($_POST["submitted"]) ) {

		$first = $_POST["first"];
		$second = $_POST["second"];

		echo "<h3 class='feedback'>Here are your results:</h3>";

		echo "<p>The numbers you entered were <b>$first</b> and <b>$second</b></p>";
		
		$total = floatval($first) + $second;

		echo "<p>Addition: $first + $second = $total</p>";

		$total = floatval($first) - $second;

		echo "<p>Subtraction: $first - $second = $total</p>";

		$total = floatval($first) * $second;

		echo "<p>Multiplication: $first * $second = $total</p>";

		$total = floatval($first) / $second;

		echo "<p>Division: $first / $second = $total</p>";

		

}
	?>
