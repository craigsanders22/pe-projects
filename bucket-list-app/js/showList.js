import { manipulateLocalStorage } from './main.js';
import { gotoDetailPage } from './wayfinding.js';

export function showList() {
    const list = document.querySelector('#list');
    list.innerHTML = "";

    const currentCategory = manipulateLocalStorage("currentCategory");
    const categories = manipulateLocalStorage("categories", null, true);

    const items = categories[currentCategory];
    if (items && items.length > 0) {
        for (let i = 0; i < items.length; i++) {
            const item = items[i];
            const li = document.createElement('li');
            li.textContent = item;
            li.classList.add('list-item');
            li.dataset.index = i;
            li.addEventListener('click', () => gotoDetailPage(i, item));
            list.appendChild(li);
        }
    } else {
        const li = document.createElement('li');
        li.textContent = "No items in this category";
        li.classList.add('empty-message');
        list.appendChild(li);
    }
}

