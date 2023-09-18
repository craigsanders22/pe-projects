


let pageNumber = 0

//content for the pages

const pages = [
	
	{copy: "an Indianapolis based designer and developer", background: "#71a09f", circle: "#6c6874"},
	{copy: "Zach Bryan's biggest fan", background: "#da9b9c", circle: "#a7868d"},
	{copy: "looking for a job in January", background: "#71a09f", circle: "#a7868d"},
	{copy: `check out my <a href="craig.pdf">resume</a>`, background: "#da9b9c", circle: "#a7868d"},
	{copy: "let's chat!", background: "#da9b9c", circle: "#a7868d"},
	]



//this is the data for holding the page

const nextTag = document.querySelector("footer img.next");
const outputTag = document.querySelector("h2");
const previousTag = document.querySelector("footer img.prev");


//make a next function for the page arrow
const next = function () {
	pageNumber = pageNumber + 1

	if (pageNumber > pages.length - 1) {
		pageNumber = 0
	}


	updateSection()
}

//previous page
const prev = function () {
	pageNumber = pageNumber - 1

	if (pageNumber < 0) {
		pageNumber = pages.length - 1 
	}

	updateSection()
}



//connect clicks to the function//

const updateSection = function() {

	outputTag.innerHTML = pages[pageNumber].copy
}

nextTag.addEventListener("click", function() {

	next()
	
});

previousTag.addEventListener("click", function () {

	prev()

});