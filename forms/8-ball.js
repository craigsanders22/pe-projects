var responses = [
    "It is certain",
    "It is decidedly so",
    "Without a doubt",
    "Yes definitely",
    "You may rely on it",
    "As I see it, yes",
    "Most likely",
    "Outlook good",
    "Yes",
    "Signs point to yes",
    "Reply hazy, try again",
    "Ask again later",
    "Better not tell you now",
    "Cannot predict now",
    "Concentrate and ask again",
    "Don't count on it",
    "My reply is no",
    "My sources say no",
    "Outlook not so good",
    "Very doubtful"
];


var outputElement = document.querySelector('#output');
var form = document.querySelector('#questionForm');

function createMessage() {
    var question = document.querySelector('#question').value;

    if (question) {
        var randomIndex = Math.floor(Math.random() * responses.length);
        return responses[randomIndex];
    } else {
        alert('Please enter a question!');
    }
}

function renderMessage() {
    outputElement.innerHTML = createMessage();
}

form.addEventListener("submit", function(event) {
    event.preventDefault();
    renderMessage();
});

// function createMessage() {
//     if (validPasswords.includes(password.value)) {
//         return `Welcome, ${username.value}!`;
//     } else {
//         return `I don't know you, ${username.value}`;
//     }
// }