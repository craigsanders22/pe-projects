function calculateRetirement() {
    var outputElement = document.getElementById("output");
    var currentAge = currentAgeInput.value;
    var retireAge = retireAgeInput.value;

    if (currentAge > retireAge) {
        alert("Invalid input. You must retire after your current age.");
        return;
    }

    var yearsToRetire = retireAge - currentAge;
    var currentYear = new Date().getFullYear();
    var retirementYear = currentYear + yearsToRetire;

    var output = "You have " + yearsToRetire + " years until you can retire. ";

    output += "It is currently " + currentYear + " so you can retire in " + retirementYear + "!";

    outputElement.innerHTML = output;
}