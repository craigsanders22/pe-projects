export async function showPage(pageId) {
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
}
