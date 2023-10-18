export function showList() {
  const currentCategory = localStorage.getItem("currentCategory");
  const list = document.querySelector('#list');
  list.innerHTML = "";
  const categories = getCategories();
  const items = categories[currentCategory];
  for (let i = 0; i < items.length; i++) {
    const item = items[i];
    const li = document.createElement('li');
    li.textContent = item.content;
    li.classList.add('list-item');
    li.dataset.index = i;
    li.addEventListener('click', () => gotoDetailPage(i, item.content));
    
    // Check if the item has saved data and update UI accordingly
    if (item.complete) {
      li.classList.add('completed');
    }
    
    list.appendChild(li);
  }
}

