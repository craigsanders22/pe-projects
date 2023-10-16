export function showPage(id) {
  let pages = document.querySelectorAll(".page");
  pages.forEach(page => {
    page.style.display = page.id === id ? "block" : "none";
  });
}
