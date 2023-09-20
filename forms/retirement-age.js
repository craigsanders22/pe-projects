var outputElement = document.querySelector("output");
var form = document.querySelector("form");
var clearButton = document.querySelector("[type='button']");

function calculateYears() {
  	var currentAge = form.querySelector("#currentAgeInput");
	var retireAge = document.querySelector("#retireAgeInput");
	var yearsToRetire = retireAge.value - currentAge.value;
	return yearsToRetire;
}

function createMessage() {
	//if calulate age <0 if not bigger than 0 = alert

	if (calculateYears() == 0) {
		return "You are retiring this year!"
	}
	else if (calculateYears() >0 ){
		return "You have " + calculateYears() + " years until you can retire. ";
	} 

	else {
		return "You must be retired already!";
	}
}

function renderMessage() {
	outputElement.innerHTML = createMessage()
}

function clearMessage() {
	outputElement.innerHTML = ""
}

form.addEventListener("submit",function(event){
	event.preventDefault();
	renderMessage()

})

form.addEventListener("input",function(event){
	event.preventDefault();
	clearMessage();

})

clearButton.addEventListener("click",function(event){
	//event.preventDefault();
	clearMessage();

})



// pull in function
// function retirementAge(event) {
    
//     event.preventDefault();

//     // assign variables from form values
    
//     var currentAge = currentAgeInput.value;
//     var retireAge = retireAgeInput.value;


//     //error handling
//     if (currentAge <= retireAge) {
//         alert("Invalid input. You must retire after your current age.");
//         return;
//     }

//     // build output variables
//     var yearsToRetire = retireAge - currentAge;
//     var currentYear = new Date().getFullYear();
//     var retirementYear = currentYear + yearsToRetire;


//     // build output
//     var output = "You have " + yearsToRetire + " years until you can retire. ";

//     output += "It is currently " + currentYear + " so you can retire in " + retirementYear + "!";


//     // run output
//     document.getElementById("output").innerHTML = output;
// }

