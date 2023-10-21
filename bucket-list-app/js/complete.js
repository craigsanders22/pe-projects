export function showCompletedItems() {
  const completedItems = JSON.parse(localStorage.getItem("completedItems")) || [];
  const completedList = document.querySelector('#completedList');

  completedList.innerHTML = ''; // clear

  completedItems.forEach(item => {
    // Check if the item already exists in the completed list
    const existingItem = completedList.querySelector(`li[data-content="${item.content}"]`);

    if (!existingItem) {
      const li = document.createElement('li');
      li.textContent = item.content;
      li.setAttribute('data-content', item.content);
      completedList.appendChild(li);
    }
  });
}

