


import { showPage } from './showPage.js';

export function attachEventListeners() {
    const buttons = [
        'loginButton', 
        'signupButton', 
        'wayfindingButton', 
        'categoryListButton', 
        'detailButton', 
        'completeButton'
    ];

    buttons.forEach(button => document.getElementById(button)
        .addEventListener('click', () => showPage(button.replace('Button','Page')))
    );

    ['signupLink', 'loginLink'].forEach(link => document.getElementById(link)
        .addEventListener('click', (event) => {
            event.preventDefault();
            showPage(link.replace('Link','Page'))
        })
    );
}
