

function createNewTitle() {
    const newTitle = prompt("Enter the title for your new list");

    if (newTitle) {
        // Store the newTitle to localStorage and lead user to new page
        localStorage.setItem("newTitle", newTitle);
        window.location.href = 'category-list.php';
    }
}

function gotoAddItemsPage(category) {
    // Store the category to localStorage and lead user to new page
    localStorage.setItem("newTitle", category);
    window.location.href = 'category-list.php';
}

document.querySelector('#addTitle').addEventListener('click', createNewTitle);
document.querySelector('#placesToGo').addEventListener('click', function() { 
    gotoAddItemsPage('Places to Go'); 
});
document.querySelector('#experiences').addEventListener('click', function() { 
    gotoAddItemsPage('Experiences'); 
});
