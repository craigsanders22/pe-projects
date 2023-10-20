export function showCompletedItems() {
  const completedItems = JSON.parse(localStorage.getItem("completedItems")) || [];
  const completedList = document.querySelector('#completedList');

  completedList.innerHTML = ''; // clear

  completedItems.forEach(item => {
    const li = document.createElement('li');
    li.textContent = item.content;
    completedList.appendChild(li);
  });
}

