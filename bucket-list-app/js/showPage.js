import { showList } from './showList.js';
import { manipulateLocalStorage } from './main.js';
import { showCompletedItems } from './complete.js';

export async function showPage(pageId, category) {
  const pages = document.querySelectorAll('.page');
  pages.forEach(page => {
    page.style.display = 'none';
  });

  // show the requested page
  const page = document.querySelector(`#${pageId}`);
  page.style.display = 'block';

  // dynamically handle the page
  if (pageId === 'wayfindingPage') {
    const { handleWayfinding } = await import('./wayfinding.js');
    handleWayfinding();
  } else if (pageId === 'categoryListPage') {
    const { handleCategoryList } = await import('./wayfinding.js');
    handleCategoryList();
  }

  // If category is provided, update the currentCategory fpr details
  if (category) {
    localStorage.setItem("currentCategory", category);
  }

  if (pageId === 'completedPage') {
    const { showCompletedList } = await import('./completed.js');
    showCompletedList();
  }

  if (pageId === 'completePage') {
    showCompletedItems();
  }
}

