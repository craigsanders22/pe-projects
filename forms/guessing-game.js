// declare variables
let secretNumber, maxRange, attempts;
var outputElement = document.querySelector('output');

// start the game
function startGame() {
  const difficulty = parseInt(document.querySelector("#difficulty").value);

  if (difficulty === 1) {
    maxRange = 10;
  } else if (difficulty === 2) {
    maxRange = 100;
  } else if (difficulty === 3) {
    maxRange = 1000;
  }

  //generate secret number
  secretNumber = Math.floor(Math.random() * maxRange) + 1;
  attempts = 0;

  //prompt for guess
  document.querySelector("#instructions").textContent = `I have my number. It's between 1 and ${maxRange}.`;
}

//submit guess for comparison 
function submitGuess() {
  const guess = parseInt(document.querySelector("#guess").value);

   document.querySelector("#result").textContent = "";

  if (isNaN(guess) || guess < 1 || guess > maxRange) {
    document.querySelector("#result").textContent = "Please enter a valid number within the range.";
    return;
  }

  attempts++;
  
  renderMessage(guess);
}

function createMessage(guess) {
  if (guess === secretNumber) {
    return `You got it in ${attempts} guesses!`;
  } else if (guess < secretNumber) {
    return `Too low. Guess again.`;
  } else {
    return `Too high. Guess again.`;
  }
}

function renderMessage(guess) {
  outputElement.innerHTML = createMessage(guess);
}

document.querySelector('form').addEventListener("submit", function(event) {
  event.preventDefault();
  submitGuess();
});



