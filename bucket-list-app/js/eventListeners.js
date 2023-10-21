import { showPage } from './showPage.js';
import { handleWayfinding, getCategories, renameCategory } from './wayfinding.js';

export function attachEventListeners() {
  const addTitleElement = document.querySelector('#addTitle');
  if (addTitleElement !== null) {
    handleWayfinding();
  }

  const buttons = [
    'loginButton', 
    'signupButton', 
    'wayfindingButton', 
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

  // Add event listener for save button in the detail page
  document.getElementById('saveButton').addEventListener('click', () => {
    showPage('categoryListPage');
  });
}
