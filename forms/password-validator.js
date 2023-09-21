var outputElement = document.querySelector("output");
var form = document.querySelector("form");


    // List of valid passwords
var validPasswords = ["craig123", "derek123", "brian123", "max123", "paul123", "ad123", "hunter123"]


    // Get the entered user and pass
var username = form.querySelector("#username");
var password = form.querySelector("#password");


   //compare passwords? Or is that below?


    // Create Message
function createMessage() {
    if (validPasswords.includes(password.value)) {
        return `Welcome, ${username.value}!`;
    } else {
        return `I don't know you, ${username.value}`;
    }
}

function renderMessage() {
    outputElement.innerHTML = createMessage();
}

form.addEventListener("submit",function(event){
    event.preventDefault();
    renderMessage()

});
