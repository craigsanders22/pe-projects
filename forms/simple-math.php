<?php include "form-header.php" ?>


<title>Simple Math</title>

</head>

<body>
	<div class="container">
		<div class="inner-column">
<form method="POST" onsubmit="doMath(event)">

	<h1>Simple Math Form</h1>
	<h4>Enter your two numbers and we'll do some computing!</h4>
	<br>

	<div class='field'>
		<label>What is the first number?</label>
		<input type="number" name="first" id="first" value="0">
	</div>

	<div class='field'>
		<label>What is the second number?</label>
		<input type="number" name="second" id="second" value="0">
	</div>

	<button type="submit" name="submitted">
		Compute
	</button>

</form>

<h4 id="results"></h4>

</div>
</div>
</body>



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

	echo "calculated with PHP on the server";
}
?>


<script src="simple-math.js"></script>