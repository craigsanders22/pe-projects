import {showPage} from './showPage.js';
import {getUserData, setSessionData} from './localStorage.js';

export function handleLoginSubmit() {
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
        
            //send to wayfinding
            setSessionData('loggedIn', true);
            showPage('wayfindingPage'); 
        } else {
            alert('Invalid username or password');
        }
    };
}
