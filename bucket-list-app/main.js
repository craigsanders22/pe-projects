// main.js

import { showPage } from './showPage.js';

// Add event listeners for all the buttons
document.getElementById('loginButton').addEventListener('click', () => showPage('loginPage'));
document.getElementById('signupButton').addEventListener('click', () => showPage('signupPage'));
document.getElementById('wayfindingButton').addEventListener('click', () => showPage('wayfindingPage'));
document.getElementById('categoryListButton').addEventListener('click', () => showPage('categoryListPage'));
document.getElementById('detailButton').addEventListener('click', () => showPage('detailPage'));
document.getElementById('completeButton').addEventListener('click', () => showPage('completePage'));

// Add event listeners for sign up and login links in your forms as well
document.getElementById('signupLink').addEventListener('click', (event) => {
  event.preventDefault();
  showPage('signupPage')
});
document.getElementById('loginLink').addEventListener('click', (event) => {
  event.preventDefault();
  showPage('loginPage')
});

// Show login page by default
showPage('loginPage');

// login
document.addEventListener('DOMContentLoaded', (event) => { 
    const form = document.getElementById('loginForm');
    const inputUsername = document.getElementById('username');
    const inputPassword = document.getElementById('loginPassword');

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
            showPage('wayfinding'); // Redirect to wayfinding
        } else {
            alert('Invalid username or password');
        }
    }
});

//sign up
document.addEventListener('DOMContentLoaded', (event) => {
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
        showPage('login');
    }
});

// wayfinding
function createNewTitle() {
    const newTitle = prompt("Enter the title for your new list");

    if (newTitle) {
        localStorage.setItem("newTitle", newTitle);
        showPage('categoryList');
    }
}

function gotoAddItemsPage(category) {
    localStorage.setItem("newTitle", category);
    showPage('categoryList');
}

document.querySelector('#addTitle').addEventListener('click', createNewTitle);
document.querySelector('#placesToGo').addEventListener('click', function() { 
    gotoAddItemsPage('Places to Go'); 
});
document.querySelector('#experiences').addEventListener('click', function() { 
    gotoAddItemsPage('Experiences'); 
});

// category list
document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('listTitle').innerText = localStorage.getItem("newTitle");

    function addItem() {
        const newItem = document.getElementById('newItem').value;
        if (newItem) {
            const li = document.createElement('li');
            li.innerText = newItem;
            document.getElementById('list').appendChild(li);
            document.getElementById('newItem').value = '';
        }
    }

    document.getElementById('addItemButton').addEventListener('click', addItem);
});
