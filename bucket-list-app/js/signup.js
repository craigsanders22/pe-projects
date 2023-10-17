import { showPage } from './showPage.js';

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

        alert('Signup successful - you can now login.');
        showPage('loginPage');
    }
}
