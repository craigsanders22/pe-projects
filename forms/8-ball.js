
//set possible responses
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

//assign variables
var form = document.querySelector('#questionForm');
var outputElement = document.querySelector('#output');

//run response
function createMessage() {
	var question = document.querySelector('#question').value;

	if (question) {
		var randomIndex = Math.floor(Math.random() * responses.length);
		return responses[randomIndex];
	} else {
		alert('Please enter a question!');
	}
}

//display message
function renderMessage() {
	outputElement.innerHTML = createMessage();
}

//listen for submit
form.addEventListener("submit", function(event) {
	event.preventDefault();
	renderMessage();
});
