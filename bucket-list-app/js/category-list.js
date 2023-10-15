




    // When the page loads, get the list title from localStorage and update the title
    document.getElementById('listTitle').innerText = localStorage.getItem("newTitle");

    function addItem() {
        const newItem = document.getElementById('newItem').value;
        if (newItem) {
            const li = document.createElement('li');
            li.innerText = newItem;
            document.getElementById('list').appendChild(li);
            // Clear the input
            document.getElementById('newItem').value = '';
        }
    }
