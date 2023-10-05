function update(note = "") {
console.log(`-------- ${note}`);
console.log('todos:',todos);
}

const todos = [];
var count = 0;

function add(content) {
	const todo = {
		id: count++,
		content: content
	};
	todos.push(todo);
	update(`Added ${content}`);
}

function remove(id) {
	var todo = {};
	update(`Removed ${todos[id].content}`);
	todos.splice(id, 1);
}

function complete(id) {
	todos[id].complete = true;
	update(`Completed ${todos[id].content}`);

}

add('finish class work');
add('pick up olivia');
add('go to Skyzone');
add('go to Trader Joes');

remove (2);
complete (1);

add('eat lunch');

