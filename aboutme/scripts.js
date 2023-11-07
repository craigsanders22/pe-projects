var goalButton = document.getElementById("goalButton");
var resumeButton = document.getElementById("resumeButton");
var goals = document.getElementById("goals");
var resume = document.getElementById("resume");
var flap = document.querySelector('#flap');

function togglePages(showButton, hideButton, showElement, hideElement) {
  showButton.addEventListener("click", function() {
    showElement.style.display = "block";
    hideElement.style.display = "none";
    flap.children[0].textContent = this.nextElementSibling.textContent;
  });
}

window.onload = function() {
    togglePages(goalButton, resumeButton, goals, resume);
    togglePages(resumeButton, goalButton, resume, goals);

    // Simulate a click on resumeButton to set initial state
    resumeButton.click();
};


const st = {};
st.flap = document.querySelector('#flap');
st.toggle = document.querySelector('.toggle');

st.choice1 = document.querySelector('#goalButton');
st.choice2 = document.querySelector('#resumeButton');

// st.flap.addEventListener('transitionend', () => {
//     st.toggle.style.transform = st.choice1.checked ? 'rotateY(-15deg)' : 'rotateY(15deg)';
//     st.flap.children[0].textContent = event.propertyName === 'transform' ? (st.choice1.checked ? "GOALS" : "RESUME") : st.flap.children[0].textContent;
// });

document.addEventListener('DOMContentLoaded', () => {
    st.flap.children[0].textContent = "RESUME";
});