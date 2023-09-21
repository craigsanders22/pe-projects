var guessesTaken = 0;

function guessNumber() {
  var difficulty = document.getElementById("difficulty").value;
  var guessInput = document.getElementById("guess");
  var guess = parseInt(guessInput.value);
  var output = document.getElementById("output");
  var guesses = document.getElementById("guesses");

  if (isNaN(guess)) {
    result.innerHTML = "Please enter a valid number.";
    return;
  }

  var secretNumber, maxGuesses;

  if (difficulty === "1") {
    secretNumber = Math.floor(Math.random() * 10) + 1;
    maxGuesses = 5;
  } else if (difficulty === "2") {
    secretNumber = Math.floor(Math.random() * 100) + 1;
    maxGuesses = 8;
  } else if (difficulty === "3") {
    secretNumber = Math.floor(Math.random() * 1000) + 1;
    maxGuesses = 12;
  }

  guessesTaken++;

  if (guess < secretNumber) {
    output.innerHTML = "Too low. Guess again.";
  } else if (guess > secretNumber) {
    output.innerHTML = "Too high. Guess again.";
  } else {
    output.innerHTML = "You got it in " + guessesTaken + " guess(es)!";
    guessInput.setAttribute("disabled", "disabled");
  }

  guesses.innerHTML = "Guesses taken: " + guessesTaken;

  if (guessesTaken === maxGuesses) {
    output.innerHTML = "You ran out of guesses.";
    guessInput.setAttribute("disabled", "disabled");
  }
}
