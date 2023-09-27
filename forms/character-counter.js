var form = document.querySelector('#countingForm');
var inputElement = document.querySelector('#inputString');
var outputElement = document.querySelector('#output');

function countCharacters(inputString) { 
    return inputString.length;
}

// create response and display
function createAndRenderMessage() {
    var inputString = inputElement.value;

    if (inputString) {
        var charCount = countCharacters(inputString);
        var words = inputString.split(/[\s\n]+/).filter(Boolean);
        var wordCount = words.length;
        outputElement.innerHTML = `Your submission has ${charCount} characters and ${wordCount} words`;
    } else {
        outputElement.innerHTML = '';
    }
}


// function createAndRenderMessage() {
//     var inputString = inputElement.value;

//     if (inputString) {
//         var charCount = countCharacters(inputString);
//         outputElement.innerHTML = `Your submission: "${inputString}" has ${charCount} characters`;
//     } else {
//         outputElement.innerHTML = '';
//     }
// }

// listen for user input
inputElement.addEventListener('input', createAndRenderMessage);
