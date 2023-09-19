
// pull in function
function retirementAge(event) {
    
    event.preventDefault();

    // assign variables from form values
    var outputElement = document.getElementById("output");
    var currentAge = currentAgeInput.value;
    var retireAge = retireAgeInput.value;


    // error handling
    // if (currentAge <= retireAge) {
    //     alert("Invalid input. You must retire after your current age.");
    //     return;
    // }

    // build output variables
    var yearsToRetire = retireAge - currentAge;
    var currentYear = new Date().getFullYear();
    var retirementYear = currentYear + yearsToRetire;


    // build output
    var output = "You have " + yearsToRetire + " years until you can retire. ";

    output += "It is currently " + currentYear + " so you can retire in " + retirementYear + "!";


    // run output
    document.getElementById("output").innerHTML = output;
}