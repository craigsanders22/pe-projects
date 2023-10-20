import { showPage } from './navigation.js';
import { getCategories } from './storage.js';




export function handleDetailPage() {
  const itemTitleElement = document.querySelector('#itemTitle');
  const itemContentElement = document.querySelector('#itemContent');
  const itemCompleteElement = document.querySelector('#itemComplete');
  const saveButton = document.querySelector('#saveButton');

  const currentItemIndex = localStorage.getItem('currentItemIndex');
  const currentItem = localStorage.getItem('currentItem');

  itemTitleElement.textContent = currentItem;
  itemContentElement.value = ''; // Update with new info
  itemCompleteElement.checked = false; // Update to complete

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
