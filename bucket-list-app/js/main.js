import { attachEventListeners } from './eventListeners.js';
import { handleLoginSubmit } from './login.js';
import { handleSignupSubmit } from './signup.js';
import { showPage } from './showPage.js';
import { showList } from './showList.js';

document.addEventListener('DOMContentLoaded', (event) => { 
  attachEventListeners();    
  handleLoginSubmit();
  handleSignupSubmit();
  showPage('loginPage'); // default to show login page
  handleDetailPage();
});

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
