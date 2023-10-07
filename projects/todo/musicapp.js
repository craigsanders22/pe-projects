var playlist = [];
var lastId = 0;
var playlistTitle = '';
var playlistCreator = '';

const $formPlaylist = document.querySelector('#form-playlist');
const $formSong = document.querySelector('#form-song');
const $playlistTitle = document.querySelector('#playlist-title');
const $playlistCreator = document.querySelector('#playlist-creator');
const $songTitle = document.querySelector('#song-title');
const $songArtist = document.querySelector('#song-artist');
const $output = document.querySelector('#playlist-display');
const $titleOutput = document.querySelector('#playlist-title-display');
const $resetButton = document.querySelector('#button-reset');

function addPlaylist(title, creator) {
	playlistTitle = title;
	playlistCreator = creator;
	var creatorElement = document.createElement("h3");
	creatorElement.innerHTML = `Current playlist: ${playlistTitle}<br>Made by: ${playlistCreator}`;



	$titleOutput.append( creatorElement);
}

function add(songTitle, songArtist) {
	if (songTitle.trim() !== "" && songArtist.trim() !== "") {
		const song = {
			id: `a-${lastId++}`,
			songTitle,
			songArtist,
			complete: false,
		};
		playlist = [...playlist, song];
		localStorage.setItem('playlist', JSON.stringify(playlist));
		renderPlaylist(playlist);
	}
}

function renderPlaylist(playlist) {
	var template = "<ul>";
	playlist.forEach(function (song) {
		template += renderSong(song);
	});
	template += "</ul>";
	$output.innerHTML = template;
}

function remove(id) {
	const filtered = playlist.filter(song => song.id !== id);
	playlist = [...filtered];
	renderPlaylist(playlist);
}

function complete(id) {
	const song = playlist.find(song => song.id === id);
	if (song) song.complete = true;
	renderPlaylist(playlist);
}

function renderSong(song) {
	return `
	<li data-id='${song.id}'>
	<h4 class='${song.complete ? "completed" : ""}'>${song.songTitle} by ${song.songArtist}</h4>
	<p>Status: ${song.complete ? "Completed" : "Not completed"}</p>
	<actions>
	<button class='remove'>remove</button>
	<button class='complete'>complete</button>
	</actions>
	</li>
	`;
}

window.onload = function () {
	playlist = JSON.parse(localStorage.getItem('playlist')) || [];
	renderPlaylist(playlist);
}

$formSong.addEventListener('submit', (event) => {
	event.preventDefault();
	add($songTitle.value, $songArtist.value);
	$songTitle.value = "";
	$songArtist.value = "";
});

$output.addEventListener('click', (event) => {
	if (event.target.className === 'remove') {
		const id = event.target.closest('li').dataset.id;
		remove(id);
	}

	if (event.target.className === 'complete') {
		const id = event.target.closest('li').dataset.id;
		complete(id);
	}
});

$formPlaylist.addEventListener('submit', (event) => {
	event.preventDefault();
	addPlaylist($playlistTitle.value, $playlistCreator.value);
	$playlistTitle.value = "";
	$playlistCreator.value = "";
});

$resetButton.addEventListener('click', () => {
	playlist = [];
	lastId = 0;
	localStorage.removeItem('playlist');
	$songTitle.value = "";
	$songArtist.value = "";
	$output.innerHTML = "";
	$titleOutput.innerHTML = "";
});

// class Playlist {
//     constructor(title, creator) {
//         this.title = title;
//         this.creator = creator;
//         this.playlist = [];
//         // var storedPlaylist = localStorage.getItem('playlist');
//         // if (storedPlaylist) {
//         //     this.playlist = JSON.parse(storedPlaylist);
//         // }
//         this.idIncrementor = this.playlist.length;
//     }

//     save() {
//         localStorage.setItem('playlist', JSON.stringify(this.playlist));
//     }

//     add(songTitle, songArtist) {
//         const song = {
//             id: `a${this.idIncrementor++}`,
//             title: songTitle,
//             artist: songArtist
//         };
//         this.playlist = [...this.playlist, song];
//         console.log(`${this.title.toUpperCase()} --- Added ${songTitle} by ${songArtist}`);
//         this.save();
//     }

//     remove(id) {
//         var song = this.playlist[id];
//         if(song) {
//             this.playlist.splice(id, 1);
//             console.log(`${this.title.toUpperCase()} --- Removed ${song.title} by ${song.artist}`);
//             this.save();
//         }
//     }

//     complete(id) {
//         var song = this.playlist[id];
//         if(song) {
//             song.complete = true;
//             console.log(`${this.title.toUpperCase()} --- Played ${song.title} by ${song.artist} `);
//             this.save();
//         }
//     }

//     updateSong(id, newTitle, newArtist) {
//         var song = this.playlist[id];
//         if(song) {
//             song.title = newTitle;
//             song.artist = newArtist;
//             console.log(`${this.title.toUpperCase()} --- Updated song with the ID of ${id}: new title is '${newTitle}', new artist is '${newArtist}'`);
//             this.save();
//         }
//     }
// }




// // the data 
// const highSchool = new Playlist('High School', 'Craig');
// const college = new Playlist('College', 'Bob');
// const clubbing= new Playlist('Clubbing', 'Frank');
// const wedding = new Playlist('Wedding', 'Joe');


// console.log(wedding.creator);

// Playlist.prototype.whisper = function() {
// 	console.log(`Hi, I'm ${this.creator} and I created this ${this.title} playlist!`)
// };

// wedding.whisper(); 

// highSchool.add('All The Small Things', 'Blink 182');
// wedding.add('At Last', 'Etta James');

// console.log(wedding.playlist);


// highSchool.add('Mr. Brightside', 'The Killers');
// highSchool.add('In The End', 'Linkin Park');
// highSchool.add('New Slang', 'The Shins');
// highSchool.add('Electric Feel', 'MGMT');
// highSchool.add('Ms. Jackson', 'OutKast');
// highSchool.add('Backyard', 'Guster');
// highSchool.add('My Girls', 'Animal Collective');
// highSchool.add('Someday', 'The Strokes');
// highSchool.add('Feel Good Inc', 'Gorillaz');




// wedding.remove(0);
// wedding.add('At Last', 'Etta James');
// wedding.add('You Are the Best Thing', 'Ray LaMontagne');
// wedding.add('My Girl', 'The Temptations');
// wedding.add('The Luckiest', 'Ben Folds');
// wedding.add('Single Ladies', 'Beyonce');
// wedding.add('How Sweet It Is', 'James Taylor');
// wedding.add('L-O-V-E', 'Nat King Cole');
// wedding.add("Love Shack", "The B-52's");


// highSchool.complete(2);
// wedding.complete(4);


// college.complete(2); //doesn't exist yet
// college.add('Viva La Vida', 'Coldplay');
// college.add('So What', 'Pink');
// college.add('Love Story', 'Taylor Swift');
// college.complete(2); //does exist

// college.updateSong(1, 'Fireflies', 'Owl City');


// console.log(highSchool.playlist);
// console.log(wedding.playlist);
// console.log(college.playlist);



















