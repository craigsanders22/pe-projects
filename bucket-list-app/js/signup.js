// Using an immediately invoked function expression (IIFE) to avoid variable hoisting
(function() {
    // Get form elements
    const form = document.getElementById('signupForm');
    const inputFirstName = document.getElementById('firstName');
    const inputEmail = document.getElementById('email');
    const inputUsername = document.getElementById('username');
    const inputPassword = document.getElementById('password');

    form.onsubmit = function(event) {
        // Prevent form from posting
        event.preventDefault();

        // Get user input
        const firstName = inputFirstName.value;
        const email = inputEmail.value;
        const username = inputUsername.value;
        const password = inputPassword.value;

        // For example here we just simply store the user data in local storage
        // In reality, you should send this data to server and get response from there
        localStorage.setItem('user', JSON.stringify({firstName, email, username, password}));

        alert('Signup successful - you can now login.');
        window.location.href = "login.html"; // Redirect to the login page
    }
})();
