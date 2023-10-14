
(function() { 
    // Get form elements
    const form = document.getElementById('loginForm');
    const inputUsername = document.getElementById('username');
    const inputPassword = document.getElementById('password');

    form.onsubmit = function(event) {
        // Prevent form from posting
        event.preventDefault();

        // Get user input
        const username = inputUsername.value;
        const password = inputPassword.value;

        // quick check
        if (username === "user" && password === "pass") {
            alert('Login success!');
            
            sessionStorage.setItem('loggedIn', true);
            window.location.href = "?page=wayfinding"; // Redirect to home page
        } else {
            alert('Invalid username or password');
        }
    }
})();
