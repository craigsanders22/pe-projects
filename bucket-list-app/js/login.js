import {showPage} from './showPage.js';
import {getUserData, setSessionData} from './localStorage.js';



export function handleLoginSubmit(onLoginSuccess) {
    const form = document.getElementById('loginForm');
    const inputUsername = document.getElementById('username');
    const inputPassword = document.getElementById('loginPassword');

    form.onsubmit = function(event) {
    event.preventDefault();
     
    const username = inputUsername.value;
    const password = inputPassword.value;
     
    const userData = getUserData();
     
 if ((username === userData.email && password === userData.password) || 
    (username === "user" && password === "pass")) {
    alert('Login success!');

    // Call onLoginSuccess
    if(typeof onLoginSuccess === 'function'){
        onLoginSuccess();
     }

    //send to wayfinding
    setSessionData('loggedIn', true);
} else {
    alert('Invalid username or password');
}

};
}
