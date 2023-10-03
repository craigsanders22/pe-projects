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




let playlist = [];
        let count = 0;

        function update() {
            const div = document.getElementById('playlist');
            div.innerHTML = '';
            for(let song of playlist) {
                div.innerHTML += 
                `<div class="song" id="${song.id}">
                    <span>${song.title} by ${song.artist}</span>
                    <button onclick="remove(${song.id})">Remove</button>
                    <button onclick="play(${song.id})">Play</button>
                </div>`;
            }
        }

        function add() {
            const songTitle = document.getElementById('songTitle').value;
            const artist = document.getElementById('artist').value;
            const song = { id: count++, title: songTitle, artist: artist };
            playlist.push(song);
            update();
        }

        function remove(id) {
            let index = playlist.findIndex(song => song.id === id);
            playlist.splice(index, 1);
            update();
        }

        function play(id) {
            let song = playlist.find(song => song.id === id);
            alert(`Now playing ${song.title} by ${song.artist}`);
        }