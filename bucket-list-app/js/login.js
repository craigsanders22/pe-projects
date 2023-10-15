
(function() { 
    // Get form elements
    const form = document.getElementById('loginForm');
    const inputUsername = document.getElementById('username');
    const inputPassword = document.getElementById('password');

    form.onsubmit = function(event) {
        // Prevent form from posting
        event.preventDefault();

        // get user input
        const username = inputUsername.value;
        const password = inputPassword.value;
        
        // get stored user data from local storage
        let storedUserData = localStorage.getItem('user');
        storedUserData = storedUserData !== null ? JSON.parse(storedUserData) : {email: "", password: ""};
        
        // Check if input matches stored data or hardcoded data
        if ((username === storedUserData.email && password === storedUserData.password) || 
            (username === "user" && password === "pass")) {
            alert('Login success!');
            
            sessionStorage.setItem('loggedIn', true);
            window.location.href = "?page=wayfinding"; // Redirect to wayfinding
        } else {
            alert('Invalid username or password');
        }
    }
})();
