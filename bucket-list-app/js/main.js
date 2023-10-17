import { showPage } from './showPage.js';
import { attachEventListeners } from './eventListeners.js';
import { handleLoginSubmit } from './login.js';
import { handleSignupSubmit } from './signup.js';
import { handleWayfinding, handleCategoryList } from './wayfinding.js';

document.addEventListener('DOMContentLoaded', (event) => { 
    attachEventListeners();    
    handleLoginSubmit();
    handleSignupSubmit();
    handleWayfinding();
    handleCategoryList();
    showPage('loginPage'); // Show login page by default
});
