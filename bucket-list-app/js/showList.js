// export function showList() {
//   const currentCategory = localStorage.getItem("currentCategory");
//   const list = document.querySelector('#list');
//   list.innerHTML = "";
//   const categories = getCategories();
//   const items = categories[currentCategory];
//   for (let i = 0; i < items.length; i++) {
//     const item = items[i];
//     const li = document.createElement('li');
//     li.textContent = item;  // Used item instead of item.content
//     li.classList.add('list-item');
//     li.dataset.index = i;
//     li.addEventListener('click', () => gotoDetailPage(i, item));  // Used item instead of item.content
//     list.appendChild(li);
//   }
// }


import { manipulateLocalStorage } from './main.js';
import { gotoDetailPage } from './wayfinding.js';

export function showList() {
    const list = document.querySelector('#list');
    list.innerHTML = "";

    const currentCategory = manipulateLocalStorage("currentCategory");
    const categories = manipulateLocalStorage("categories", null, true);

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
