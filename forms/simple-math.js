
function doMath(event) {
	event.preventDefault();

	var first = parseFloat(document.getElementById("first").value);
	var second = parseFloat(document.getElementById("second").value);

	var resultsDiv = document.getElementById("results");
	resultsDiv.innerHTML = "<h3 class='feedback'>Here are your results:</h3>" +
	"<p>The numbers you entered were <b>" + first + "</b> and <b>" + second + "</b></p>" +
	"<p>Addition: " + (first + second) + "</p>" +
	"<p>Subtraction: " + (first - second) + "</p>" +
	"<p>Multiplication: " + (first * second) + "</p>" +
	"<p>Division: " + (first / second) + "</p>";
};

