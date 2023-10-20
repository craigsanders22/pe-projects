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
    const newItem = newItemInput.value.trim();
    if (newItem) {
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

// export function showList() {
//     const list = document.querySelector('#list');
//     list.innerHTML = "";

//     const currentCategory = manipulateLocalStorage("currentCategory");
//     const categories = manipulateLocalStorage("categories", null, true);

//     const items = categories[currentCategory];
//     for (let i = 0; i < items.length; i++) {
//         const item = items[i];
//         const li = document.createElement('li');
//         li.textContent = item;
//         li.classList.add('list-item');
//         li.dataset.index = i;
//         li.addEventListener('click', () => gotoDetailPage(i, item));
//         list.appendChild(li);
//     }
// }

export function gotoDetailPage(index, item) {
    localStorage.setItem('currentItemIndex', index);
    localStorage.setItem('currentItem', item);
    showPage('detailPage');
}
