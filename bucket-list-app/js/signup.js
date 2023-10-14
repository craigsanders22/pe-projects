document.addEventListener('DOMContentLoaded', (event) => {
    // Get form elements
    const form = document.getElementById('signupForm');
    const inputFirstName = document.getElementById('firstName');
    const inputEmail = document.getElementById('email');
    const inputPassword = document.getElementById('password');

    form.onsubmit = function(event) {
        // Prevent form from posting
        event.preventDefault();

        // Get user input
        const firstName = inputFirstName.value;
        const email = inputEmail.value;
        const password = inputPassword.value;

        // Store the user data in local storage
        localStorage.setItem('user', JSON.stringify({firstName, email, password}));

        alert('Signup successful - you can now login.');
        window.location.href = "?page=login"; // Redirect to the login page
    }
});
