import { attachEventListeners } from './eventListeners.js';
import { handleLoginSubmit } from './login.js';
import { handleSignupSubmit } from './signup.js';
import { showPage } from './showPage.js';
import { showList } from './showList.js';
import { showCategories } from './wayfinding.js';
// import { onLoginSuccess} from './login.js';




// Handle successful login
function onLoginSuccess() {
  showCategories();
  showPage('categoriesPage'); 
}

document.addEventListener('DOMContentLoaded', (event) => { 
  attachEventListeners();    
  handleLoginSubmit(onLoginSuccess);
  handleSignupSubmit();

  showPage('categoriesPage'); // default to show login page
});


document.addEventListener('DOMContentLoaded', (event) => { 
  attachEventListeners();    
  handleLoginSubmit();
  handleSignupSubmit();

  // show the categories on load
  showCategories();

  showPage('loginPage'); // default to show login page
 
});

export function manipulateLocalStorage(key, defaultValue, operation) {
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



export function handleDetailPage() {
  const itemTitleElement = document.querySelector('#itemTitle');
  const itemContentElement = document.querySelector('#itemContent');
  const itemCompleteElement = document.querySelector('#itemComplete');
  const saveButton = document.querySelector('#saveButton');

  const currentItemIndex = localStorage.getItem('currentItemIndex');
  const currentItem = localStorage.getItem('currentItem');

  itemTitleElement.textContent = currentItem;
  itemContentElement.value = ''; // Update with the saved content if applicable
  itemCompleteElement.checked = false; // Update with the saved completion status if applicable

  saveButton.addEventListener('click', () => {
    saveData(currentItemIndex, itemContentElement.value, itemCompleteElement.checked);
  });
}

function saveData(index, content, complete) {
  const currentCategory = localStorage.getItem("currentCategory");
  const categories = getCategories();
  categories[currentCategory][index] = {
    content: content,
    complete: complete
  };
  localStorage.setItem("categories", JSON.stringify(categories));
  showPage('categoryListPage');
}
