import { showPage } from './navigation.js';
import { getCategories } from './storage.js';




export function handleDetailPage() {
  const itemTitleElement = document.querySelector('#itemTitle');
  const itemContentElement = document.querySelector('#itemContent');
  const itemCompleteElement = document.querySelector('#itemComplete');
  const saveButton = document.querySelector('#saveButton');

  const currentItemIndex = localStorage.getItem('currentItemIndex');
  const currentItem = JSON.parse(localStorage.getItem('currentItem')); // Parse the JSON string

  itemTitleElement.textContent = currentItem.title; // Access the title property
  

  // Get completion from local storage
  const categories = getCategories();
  const currentCategory = localStorage.getItem("currentCategory");
  const itemCompleteStatus = categories[currentCategory][currentItemIndex].complete;
  
  // Update the status and css
  itemContentElement.value = currentItem;
  itemCompleteElement.checked = itemCompleteStatus;
  const itemElement = document.getElementById(`item${currentItemIndex}`);
  if (itemCompleteStatus) {
    itemElement.style.textDecoration = "line-through";
  } else {
    itemElement.style.textDecoration = "none";
  }

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
  
  // Update CSS if complete
  const itemElement = document.getElementById(`item${index}`);
  if (complete) {
    itemElement.style.textDecoration = "line-through";
  } else {
    itemElement.style.textDecoration = "none";
  }
  
  showPage('categoryListPage');
}

