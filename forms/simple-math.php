<?php include "form-header.php" ?>

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
