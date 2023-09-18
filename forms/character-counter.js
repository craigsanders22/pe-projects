// console.clear();

// const $form = document.querySelector('form');
// const $form = $form.querySelector('input');
// const $outlet = document.querySelector('output');

// $form.addEventListener('submit', function(event) {
// 	event.preventDefault();
// })






function countCharacters() {
            // Get the input value
            var inputString = document.getElementById("inputString").value;

            // Count the characters
            var charCount = inputString.length;

            // Output the result
            document.getElementById("result").innerHTML = '"' + inputString + '" has ' + charCount + ' characters.';
        }



