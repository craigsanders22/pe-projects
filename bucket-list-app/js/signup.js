import { showPage } from './showPage.js';
import { manipulateLocalStorage } from './main.js';


export function handleSignupSubmit() {
    const form = document.getElementById('signupForm');
    const inputFirstName = document.getElementById('firstName');
    const inputEmail = document.getElementById('email');
    const inputPassword = document.getElementById('signupPassword');

    form.onsubmit = function(event) {
        event.preventDefault();

        const firstName = inputFirstName.value;
        const email = inputEmail.value;
        const password = inputPassword.value;

        localStorage.setItem('user', JSON.stringify({firstName, email, password}));

        // Set user's name in HTML element
        const h1Element = document.querySelector('#wayfindingPage h1');
        h1Element.innerText = `${firstName}'s Bucket List`;

        alert(`Signup successful, ${firstName}! You can now login.`);
        showPage('loginPage');
    }
}



