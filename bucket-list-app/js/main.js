import { attachEventListeners } from './eventListeners.js';
import { handleLoginSubmit } from './login.js';
import { handleSignupSubmit } from './signup.js';
import { showPage } from './showPage.js';
import { showList } from './showList.js';
import { showCategories } from './wayfinding.js';

export { manipulateLocalStorage };


// import { onLoginSuccess} from './login.js';




// Handle successful login
function onLoginSuccess() {
  showCategories();
  showPage('categoriesPage'); // Assume 'categoriesPage' is the page showing categories
}

// document.addEventListener('DOMContentLoaded', (event) => { 
//   attachEventListeners();    
//   handleLoginSubmit(onLoginSuccess);
//   handleSignupSubmit();

//   showPage('loginPage'); // default to show login page
// });


document.addEventListener('DOMContentLoaded', (event) => { 
  attachEventListeners();    
  handleLoginSubmit();
  handleSignupSubmit();

  // show the categories on load
  showCategories();

  showPage('loginPage'); // default to show login page
 
});

function manipulateLocalStorage(key, defaultValue, operation) {
    let value = localStorage.getItem(key);
    if (value === null && defaultValue !== undefined) {
      value = JSON.stringify(defaultValue);
      localStorage.setItem(key, value);
    }
    if (operation) {
        try {
            return JSON.parse(value);
        } catch (e) {
            console.error('Erroneous non-JSON value in localStorage: ', value);
        }
    }
    return value;
}

document.addEventListener('DOMContentLoaded', (event) => {
  document.getElementById('saveButton').addEventListener('click', () => {
    // Retrieve the item details from the detail page
    const detailPage = document.getElementById('detailPage');
    const itemContent = detailPage.querySelector('#itemContent').value;
    const itemComplete = detailPage.querySelector('#itemComplete').checked;

    // Update the item details in localStorage
    const currentItemIndex = localStorage.getItem('currentItemIndex');
    const currentCategory = manipulateLocalStorage('currentCategory');
    const categories = manipulateLocalStorage('categories', null, true);

    categories[currentCategory][currentItemIndex] = {
      ...categories[currentCategory][currentItemIndex],
      content: itemContent,
      complete: itemComplete
    };

    localStorage.setItem('categories', JSON.stringify(categories));
  });
});


