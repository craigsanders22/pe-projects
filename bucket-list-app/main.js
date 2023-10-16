import { showPage } from './showPage.js';

document.getElementById('login').addEventListener('click', () => showPage('loginPage'));

// ...similarly for other buttons/links as well

// Show login page by default
showPage('loginPage');






import { showPage } from './showPage.js';

window.showPage = showPage; 

// Show login page by default
showPage('loginPage');
