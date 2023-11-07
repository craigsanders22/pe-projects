window.onload = function() {
    document.getElementById("goalButton").addEventListener("click", function() {
        document.getElementById("goals").style.display = "block";
        document.getElementById("resume").style.display = "none";
    });

    document.getElementById("resumeButton").addEventListener("click", function() {
        document.getElementById("resume").style.display = "block";
        document.getElementById("goals").style.display = "none";
    });
    
    // programmatically click the resumeButton
    document.getElementById("resumeButton").click();
};



const st = {};

st.flap = document.querySelector('#flap');
st.toggle = document.querySelector('.toggle');

st.choice1 = document.querySelector('#goalButton');
st.choice2 = document.querySelector('#resumeButton');

st.flap.addEventListener('transitionend', () => {

    if (st.choice1.checked) {
        st.toggle.style.transform = 'rotateY(-15deg)';
        setTimeout(() => st.toggle.style.transform = '', 400);
    } else {
        st.toggle.style.transform = 'rotateY(15deg)';
        setTimeout(() => st.toggle.style.transform = '', 400);
    }

})

st.clickHandler = (e) => {

    if (e.target.tagName === 'LABEL') {
        setTimeout(() => {
            st.flap.children[0].textContent = e.target.textContent;
        }, 250);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    st.flap.children[0].textContent = st.choice2.nextElementSibling.textContent;
});

document.addEventListener('click', (e) => st.clickHandler(e));


