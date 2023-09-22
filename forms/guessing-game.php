<?php include 'form-header.php' ?>

<body>
	<div class="inner-column">
<div class="container">
<h1>Guess the Number</h1>

<div id="game-container">
  <form onsubmit="startGame(); return false;">
    <label for="difficulty">Choose a difficulty level:</label>
    <select id="difficulty">
      <option value="1">1 - Easy (1-10)</option>
      <option value="2">2 - Medium (1-100)</option>
      <option value="3">3 - Hard (1-1000)</option>
    </select>
    <button type="submit">Start Game</button>
  </form>
</div>

<div id="game">
  <p id="instructions"></p>
  <form onsubmit="submitGuess(); return false;">
    <input type="text" id="guess" placeholder="Enter your guess">
    <button type="submit">Submit Guess</button>
  </form>

  <h4><output></output></h4>
  <p id="result"></p>
  <p id="attempts"></p>
</div>


</div>

</div>
</body>
<script src="guessing-game.js"></script>