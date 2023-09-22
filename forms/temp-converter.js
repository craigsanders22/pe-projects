

console.clear();

//set variables
const form = document.getElementById('tempForm');
const outputElement = document.getElementById('output');

//listen for submit
form.addEventListener("submit", function(event) {
    event.preventDefault();
    convertTemperature();
});

//run function w/ outputs
function convertTemperature() {
    var fInput = document.getElementById("inputFahrenheit").value;
    var cInput = document.getElementById("inputCelsius").value;

    var outputText = '';

    if (fInput !== '') {
        var cOutput = (fInput - 32) * 5/9;
        outputText = "The temperature of " + (fInput) + " degrees Fahrenheit converted to Celsius is " + Math.round(cOutput) + " degrees.";
    }

    if (cInput !== '') {
        var fOutput = cInput * 9/5 + 32;
        outputText = "The temperature of " + (cInput) + " degrees Celsius converted to Fahrenheit is " + Math.round(fOutput) + " degrees.";
    }

//output answer and clear fields
    document.getElementById("output").innerHTML = outputText;
    document.getElementById("inputFahrenheit").value = '';
    document.getElementById("inputCelsius").value = '';
};
