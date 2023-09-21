<?php include 'form-header.php' ?>


<body>
	<div inner-column>

		<h1>Paint Calculator</h1>

		<h2>Calculate the amount of paint you'll need to paint your room! <br> 
		Please enter the length and width of the room. </h2>

		<form id="paintForm">
			<label for="length">Length (feet):</label>
			<input type="number" id="length" required><br>

			<label for="width">Width (feet):</label>
			<input type="number" id="width" required><br><br>

			<button type="submit">Calculate</button>
		</form>

		<h4><output></output></h4>



		<script src="paint-calculator.js"></script>

		<div>
		</body>
		</html>

