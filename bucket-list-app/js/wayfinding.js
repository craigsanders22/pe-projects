import { showPage } from './showPage.js';

export function handleWayfinding() {
    document.querySelector('#addTitle').addEventListener('click', createNewTitle);
    document.querySelector('#placesToGo').addEventListener('click', function() { 
        gotoAddItemsPage('Places to Go'); 
    });
    document.querySelector('#experiences').addEventListener('click', function() {
        gotoAddItemsPage('Experiences');
    });
}

function createNewTitle() {
    const newTitle = prompt("Enter the title for your new list");
    if (newTitle) {
        localStorage.setItem("newTitle", newTitle);
        showPage('categoryListPage');
    }
}

function gotoAddItemsPage(category) {
    localStorage.setItem("newTitle", category);
    showPage('categoryListPage');
}


export function handleCategoryList() {
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('listTitle').innerText = localStorage.getItem("newTitle");

        function addItem() {
            const newItem = document.getElementById('newItem').value;
            if (newItem) {
                const li = document.createElement('li');
                li.innerText = newItem;
                document.getElementById('list').appendChild(li);
                document.getElementById('newItem').value = '';
            }
        }

        document.getElementById('addItemButton').addEventListener('click', addItem);
    });
}
