var outputElement = document.querySelector("output");
var form = document.querySelector("form");

const squareFeetPerGallon = 350;

// Calculate total square feet
function calculateSquareFootage() {
  var length = form.querySelector("#length");
  var width = form.querySelector("#width");
  var height = form.querySelector("#height"); // New code
  var totalSquareFeet = 2 * (height.value * width.value + height.value * length.value); // New formula
  return totalSquareFeet;
}

// Calculate gallons needed
function gallonsNeeded() {
    var totalSquareFeet = calculateSquareFootage(); 
    var gallonsNeeded = Math.ceil(totalSquareFeet / squareFeetPerGallon);
    return gallonsNeeded;
  }

// Create message
  function createMessage() {
    if (gallonsNeeded() == 0) {
      return "Maybe you don't need any paint?";
    }
    else if (gallonsNeeded() == 1 ) {
      return "You'll need " + gallonsNeeded() + " gallon of paint!";
    }

    else if (gallonsNeeded() > 1 ) {
      return "You'll need " + gallonsNeeded() + " gallons of paint!";
    }
  }

  function renderMessage() {
    outputElement.innerHTML = createMessage();
  }


  form.addEventListener("submit",function(event){
    event.preventDefault();
    renderMessage()

  })

  form.addEventListener("input",function(event){
    event.preventDefault();
    clearMessage();

  })
