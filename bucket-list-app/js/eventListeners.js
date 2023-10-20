import { showPage } from './showPage.js';
import { handleWayfinding } from './wayfinding.js';

export function attachEventListeners() {
    const addTitleElement = document.querySelector('#addTitle');
    if (addTitleElement !== null) {
        handleWayfinding();
    }
  
    const buttons = [
        'loginButton', 
        'signupButton', 
        'wayfindingButton', 
        // 'categoryListButton', // Add this line
        // 'detailButton', // Add this line
        'completeButton'
    ];

    // Attach event listeners for buttons
    buttons.forEach(button => document.getElementById(button)
        .addEventListener('click', () => showPage(button.replace('Button','Page')))
    );

    // Attach listeners for links
    ['signupLink', 'loginLink'].forEach(link => document.getElementById(link)
        .addEventListener('click', (event) => {
            event.preventDefault();
            showPage(link.replace('Link','Page'));
        })
    );

    // Call wayfinding 
    handleWayfinding();
}
