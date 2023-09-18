



function countCharacters() {
    // Get the input value
    var inputString = document.getElementById("inputString").value;
    
    // Count the characters
    var charCount = inputString.length;

	// Output the result
	document.getElementById("result").innerHTML = '"' + inputString + '" has ' + charCount + ' characters.';
    
	    return false;

        }



