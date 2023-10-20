import { showPage } from './showPage.js';
import { showList } from './showList.js';
import { manipulateLocalStorage } from './main.js';





// get existing categories 
function getCategories() {
    return manipulateLocalStorage("categories", null, true);
}

// build categories on page w/ edit
function generateListElement(title) {
    const li = document.createElement('li');
    const a = document.createElement('a');
    a.textContent = title;
    a.href = "#";
    a.addEventListener('click', () => gotoCategory(title));

    const editIcon = document.createElement('span');
    editIcon.textContent = "✏️";
    editIcon.style.cursor = "pointer";
    editIcon.style.marginLeft = "10px";
    editIcon.addEventListener('click', (e) => {
        e.stopPropagation();
        renameCategory(title);
    });

    a.appendChild(editIcon);
    li.appendChild(a);

    return li;
}

// change category name
function renameCategory(oldTitle) {
    const newTitle = prompt("Enter a new title for the category", oldTitle);
    if (newTitle && newTitle !== oldTitle) {
        let categories = getCategories();
        if (categories[newTitle]) {
            alert('A category with this name already exists.');
            return;
        }
        categories[newTitle] = categories[oldTitle];
        delete categories[oldTitle];
        manipulateLocalStorage("categories", categories);
        showCategories();
    }
}

const presetCategories = {
    "Places to Go": [],
    "Experiences": [],
    "Foods to Eat": [],
    "Performances to See": [],
    "Wild Cards": [],
    // "User Category 1": [],
    // "User Category 2": [],
    // "User Category 3": [],
};


manipulateLocalStorage("categories", presetCategories);




export function handleWayfinding() {
    const addTitleElement = document.querySelector('#addTitle');
    const placesToGoElement = document.querySelector('#placesToGo');
    const experiencesElement = document.querySelector('#experiences');

    if (addTitleElement) addTitleElement.addEventListener('click', createNewTitle);    
    if (placesToGoElement) placesToGoElement.addEventListener('click', () => gotoCategory('Places to Go'));    
    if (experiencesElement) experiencesElement.addEventListener('click', () => gotoCategory('Experiences'));

    showCategories();
}

export function handleCategoryList() {
    const currentCategory = manipulateLocalStorage("currentCategory");
    document.querySelector('#listTitle').textContent = currentCategory;
    showList();

    const addItemButton = document.querySelector('#addItemButton');
    if(addItemButton) {
        addItemButton.removeEventListener('click', addItem);
        addItemButton.addEventListener('click', addItem);
    }
}

function createNewTitle() {
    const categories = getCategories(); 
    if (Object.keys(categories).length >= 8) {
        alert("Maximum of 8 categories allowed.");
    } else {
        const newTitle = prompt("Enter the title for your new list");
        if (newTitle) {
            categories[newTitle] = [];
            localStorage.setItem("categories", JSON.stringify(categories));
            showCategories();
        }
    }
}


function gotoCategory(category) {
    localStorage.setItem("currentCategory", category);
    showPage('categoryListPage');
}

export function showCategories() {
    const categories = manipulateLocalStorage("categories", null, true);
    const bucketList = document.querySelector('#bucketList');
    bucketList.innerHTML = "";

    Object.keys(categories).forEach(categoryTitle => {
        bucketList.appendChild(generateListElement(categoryTitle));
    });
}

function addItem() {
  const newItemInput = document.querySelector('#newItem');
  const content = newItemInput.value.trim();
  if (content) {
    const newItem = {
      content: content,
      complete: false
    };
    let categories = manipulateLocalStorage("categories", null, true);

    // Check if the currentCategory array exists. If not, create...
    const currentCategory = manipulateLocalStorage("currentCategory");
    categories[currentCategory] = categories[currentCategory] || [];
    categories[currentCategory].push(newItem);

    localStorage.setItem("categories", JSON.stringify(categories));
    showList();
    newItemInput.value = "";
  }
}



export function gotoDetailPage(index, item) {
  localStorage.setItem('currentItemIndex', index);
  localStorage.setItem('currentItem', JSON.stringify(item)); 
  localStorage.setItem('currentItemContent', item.content); 
  localStorage.setItem('currentItemComplete', item.complete); 

  const detailPage = document.getElementById('detailPage');

  // item details from localStorage
  const itemTitle = item.content; 
  const itemContent = item.content; 
  const itemComplete = item.complete; 

  // Populate the detail page with the saved details
  detailPage.querySelector('#itemTitle').textContent = itemTitle;
  detailPage.querySelector('#itemContent').value = itemContent;
  detailPage.querySelector('#itemComplete').checked = itemComplete;
  
  const currentCategory = localStorage.getItem("currentCategory"); // Retrieve the current category from localStorage

  showPage('detailPage', currentCategory); // Pass the currentCategory to showPage function


  // Add event listener for the "save" button
  const saveButton = detailPage.querySelector('#saveButton');
  saveButton.addEventListener('click', () => {
    markAsCompleted(index, item);
    window.location.href = '#completePage';
  });


}

function markAsCompleted(index, item) {
  item.complete = true;
  // Save the updated item with the completed status
  // to the completed page in local storage
  let completedItems = JSON.parse(localStorage.getItem("completedItems")) || [];
  completedItems.push(item);
  localStorage.setItem("completedItems", JSON.stringify(completedItems));
}


export function showCompletedList() {
  const completedItems = JSON.parse(localStorage.getItem("completedItems")) || [];
  const completedList = document.getElementById('completedList');
  completedList.innerHTML = '';

  completedItems.forEach(item => {
    const listItem = document.createElement('li');
    listItem.textContent = item.content;
    completedList.appendChild(listItem);
  });
}




