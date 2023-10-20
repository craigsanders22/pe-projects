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

  // Call wayfinding 
  handleWayfinding();
}


  // Add event listener for editing category titles
  // const bucketList = document.querySelector('#bucketList');
  // bucketList.addEventListener('click', (event) => {
  //   if (event.target.tagName === 'A') {
  //     const oldTitle = event.target.textContent;
  //     const newTitle = prompt('Enter a new title for the category', oldTitle);

  //     if (newTitle && newTitle !== oldTitle) {
  //       // Modify the existing title in the DOM
  //       event.target.textContent = newTitle;

  //       // Update the title in the category object in localStorage
  //       let categories = getCategories();
  //       categories[newTitle] = categories[oldTitle];
  //       delete categories[oldTitle];
  //       manipulateLocalStorage('categories', categories);
  //     }
  //   }
//   });
// }

