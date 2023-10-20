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
    li.textContent = item.content; // Assuming the item is an object with a 'content' property
    li.classList.add('list-item');
    li.dataset.index = i;
    li.addEventListener('click', () => gotoDetailPage(i, item));

    // Set the CSS style based on completion status
    if (item.complete) {
      li.style.textDecoration = "line-through";
    }

    list.appendChild(li);
  }
}



