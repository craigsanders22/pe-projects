function sayHello(event) {
	
	event.preventDefault();


    // Get the input name
	var inputString = document.getElementById("inputString").value;

	

            // Output the result
	document.getElementById("result").innerHTML = 'Hello ' + inputString + ', nice to e-meet you!';
}