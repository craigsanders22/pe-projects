<?php include 'form-header.php' ?>


<body>
	<div inner-column>


		<h1>Guess the Number</h1>
		<label for="difficulty">Select a difficulty level:</label>
		<select id="difficulty">
			<option value="1">Level 1 (1 to 10)</option>
			<option value="2">Level 2 (1 to 100)</option>
			<option value="3">Level 3 (1 to 1000)</option>
		</select>
		<br><br>
		<input type="number" id="guess" placeholder="Enter your guess">
		<br><br>
		<button onclick="guessNumber()">Guess</button>
		<br><br>
		<output id="output"></output>
		<p id="guesses"></p>

	<div>
</body>
</html>


<script src="guessing-game.js"></script>