<?php include 'form-header.php' ?>


<body>
	<div class="container">
		<div class="inner-column">

			<h1>Paint Calculator</h1>

			<h4>Calculate the amount of paint you'll need to paint your room!</h4>
			<h4>Please enter the dimensons of the room:</h4><br><br>

			<form id="paintForm">
				<label for="length">Length of room (feet):</label>
				<input type="number" id="length" required><br>

				<label for="width">Width of room (feet):</label>
				<input type="number" id="width" required><br>

				<label for="height">Height of walls (feet):</label>
				<input type="number" id="height" required><br><br>

				<button type="submit">Calculate</button>
			</form>

			<h4><output></output></h4>



			<script src="paint-calculator.js"></script>

		</div>
	</div>
</body>
</html>

