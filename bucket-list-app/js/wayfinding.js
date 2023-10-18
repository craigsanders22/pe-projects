// wayfinding.js
import { showPage } from './showPage.js';

// Preset categories
const presetCategories = {
 "Places to Go": [],
 "Experiences": [],
 "Category 3": [],
 "Category 4": [],
 "Category 5": []
};

if (!localStorage.getItem("categories")) { 
    localStorage.setItem("categories", JSON.stringify(presetCategories));
}

export function handleWayfinding() {
  const addTitleElement = document.querySelector('#addTitle');
  if (addTitleElement) {
    addTitleElement.addEventListener('click', createNewTitle);
  }

  const placesToGoElement = document.querySelector('#placesToGo');
  const experiencesElement = document.querySelector('#experiences');
  if (placesToGoElement) {
    placesToGoElement.addEventListener('click', () =>
      gotoCategory('Places to Go')
    );
  }
  if (experiencesElement) {
    experiencesElement.addEventListener('click', () =>
      gotoCategory('Experiences')
    );
  }

  showCategories();
}

export function handleCategoryList() {
    const currentCategory = localStorage.getItem("currentCategory");
    document.querySelector('#listTitle').textContent = currentCategory;
    showList();

    const addItemButton = document.querySelector('#addItemButton');
    addItemButton.removeEventListener('click', addItem);
    addItemButton.addEventListener('click', addItem);
}

function createNewTitle() {
    const categories = getCategories(); 
    if (Object.keys(categories).length >= 5) {
        alert("Maximum of 5 categories allowed.");
    } else {
        const newTitle = prompt("Enter the title for your new list");
        if (newTitle) {
            addCategory(newTitle);
            showCategories();
        }
    }
}

function getCategories() {
  return JSON.parse(localStorage.getItem("categories")) || presetCategories;
}

function addCategory(newTitle) {
    let categories = getCategories();
    categories[newTitle] = [];
    localStorage.setItem("categories", JSON.stringify(categories));
}

function gotoCategory(category) {
  localStorage.setItem("currentCategory", category);
  showPage('categoryListPage');
}

function showCategories() {
  const categories = getCategories();
  const bucketList = document.querySelector('#bucketList');
  bucketList.innerHTML = "";
  for (const categoryTitle in categories) {
    const li = document.createElement('li');
    const a = document.createElement('a');
    a.textContent = categoryTitle;
    a.href = "#";
    a.addEventListener('click', () => gotoCategory(categoryTitle));
    li.appendChild(a);
    bucketList.appendChild(li);
  }
}

function addItem() {
    const newItemInput = document.querySelector('#newItem');
    const newItem = newItemInput.value.trim();
    if (newItem) {
        const currentCategory = localStorage.getItem("currentCategory");
        let categories = getCategories();
        
        // Check if the currentCategory array exists. If not, initialize it as an empty array.
        if (!Array.isArray(categories[currentCategory])) {
            categories[currentCategory] = [];
        }
        
        categories[currentCategory].push(newItem);
        localStorage.setItem("categories", JSON.stringify(categories));
        showList();
        newItemInput.value = "";
    }
}

export function showList() {
  const currentCategory = localStorage.getItem("currentCategory");
  const list = document.querySelector('#list');
  list.innerHTML = "";
  const categories = getCategories();
  const items = categories[currentCategory];
  for (let i = 0; i < items.length; i++) {
    const item = items[i];
    const li = document.createElement('li');
    li.textContent = item;
    li.classList.add('list-item');
    li.dataset.index = i;
    li.addEventListener('click', () => gotoDetailPage(i, item));
    list.appendChild(li);
  }
}


export function gotoDetailPage(index, item) {
  localStorage.setItem('currentItemIndex', index);
  localStorage.setItem('currentItem', item);
  showPage('detailPage');
  // You can now access the current item and its index in the detail page by using:
  // localStorage.getItem('currentItem')
  // localStorage.getItem('currentItemIndex')
}


