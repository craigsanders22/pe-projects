var todos = [];
var lastId = 0;
var archive = [];
const $form = document.querySelector('form');
const $input = document.querySelector('input');
const $output = document.querySelector('output');
const $complete = document.querySelector('complete');

function add(content) {
	const todo = {
		id: `a-${lastId++}`,
		content,
		complete: false,

	};

	todos = [...todos, todo];
	renderTodos(todos);

}

function remove(id) {
	const filtered = todos.filter(todo => todo.id != id);
	todos = [...filtered];
	renderTodos(todos);

}


function complete (id) {
	for (let i = 0; i < todos.length; i++) {
		if ( todos[i].id == id ) {
			todos[i].complete = true;
			renderTodos(todos);
		}
	}
}

function renderTodo(todo) {
	return `
		<li data-id='${todo.id}'>
		<todo-card class='${todo.complete ? "complete" : ""}''>
			<h2>${todo.content}</h2>
			<actions>
			<button>remove</button>
			<button>complete</button>

			</actions>
		</todo-card>
		</li>
	`;

}

function renderTodos(todos) {
	var template = "<ul>";
	todos.forEach( function(todo) {
		template += renderTodo(todo);
		});
	template += "</ul>";
	$output.innerHTML = template;
}

add("Do the dishes");

$form.addEventListener('submit', function(event) {
	event.preventDefault();
	add( $input.value );
	$input.value = "";
	console.log('todos: ', todos);

});

$output.addEventListener('click', function(event) {

	if(event.target.textContent == 'remove') {
		const id = event.target.closest('li').dataset.id;
		remove(id);
	}

	if(event.target.textContent == 'complete') {
		const id = event.target.closest('li').dataset.id;
		complete(id);
	}

});







// function update(note = "") {
// console.log(`-------- ${note}`);
// console.log('todos:',todos);
// }

// const todos = [];
// var count = 0;

// function add(content) {
// 	const todo = {
// 		id: count++,
// 		content: content
// 	};
// 	todos.push(todo);
// 	update(`Added ${content}`);
// }

// function remove(id) {
// 	var todo = {};
// 	update(`Removed ${todos[id].content}`);
// 	todos.splice(id, 1);
// }

// function complete(id) {
// 	todos[id].complete = true;
// 	update(`Completed ${todos[id].content}`);

// }

// add('finish class work');
// add('pick up olivia');
// add('go to Skyzone');
// add('go to Trader Joes');

// remove (2);
// complete (1);

// add('eat lunch');

