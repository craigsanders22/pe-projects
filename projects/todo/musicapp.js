

function Playlist(title, creator) {

	this.title = title,
	this.creator = creator,
	this.playlist = [];
	this.idIncrementor = 0;

};

Playlist.prototype.update = function(note = "") {
	console.log(`-- ${note}`);
	console.log('playlist:', this.playlist);
};

Playlist.prototype.add = function(songTitle, songArtist) {
	const song = {
		id: `a${this.idIncrementor++}`,
		title: songTitle,
		artist: songArtist
	};
	this.playlist = [...this.playlist, song];
	this.update(`Added ${songTitle} by ${songArtist}`);
};

Playlist.prototype.remove = function(id) {
	var song = this.playlist[id];
	if(song) {
		this.playlist.splice(id, 1);
		this.update(`Removed ${song.title} by ${song.artist}`);
	}
};

Playlist.prototype.complete = function(id) {
	var song = this.playlist[id];
	if(song) {
		song.complete = true;
		this.update(`Played ${song.title} by ${song.artist}`);
	}
};

Playlist.prototype.updateSong = function(id, newTitle, newArtist) {
	var song = this.playlist[id];
	if(song) {
		song.title = newTitle;
		song.artist = newArtist;
		this.update(`Updated song with the ID of ${id}: new title is '${newTitle}', new artist is '${newArtist}'`);
	}
};


const highSchool = new Playlist('High School', 'Craig');
const college = new Playlist('College', 'Bob');
const clubbing= new Playlist('Clubbing', 'Frank');
const wedding = new Playlist('Wedding', 'Joe');


console.log(wedding.creator);

Playlist.prototype.whisper = function() {
	console.log(`Hi, I'm ${this.creator} and I created this ${this.title} playlist!`)
};

wedding.whisper(); 

highSchool.add('All The Small Things', 'Blink 182');
wedding.add('At Last', 'Etta James');

console.log(wedding.playlist);


highSchool.add('Mr. Brightside', 'The Killers');
highSchool.add('In The End', 'Linkin Park');
highSchool.add('New Slang', 'The Shins');
highSchool.add('Electric Feel', 'MGMT');
highSchool.add('Ms. Jackson', 'OutKast');
highSchool.add('Backyard', 'Guster');
highSchool.add('My Girls', 'Animal Collective');
highSchool.add('Someday', 'The Strokes');
highSchool.add('Feel Good Inc', 'Gorillaz');




wedding.remove(0);
wedding.add('At Last', 'Etta James');
wedding.add('You Are the Best Thing', 'Ray LaMontagne');
wedding.add('My Girl', 'The Temptations');
wedding.add('The Luckiest', 'Ben Folds');
wedding.add('Single Ladies', 'Beyonce');
wedding.add('How Sweet It Is', 'James Taylor');
wedding.add('L-O-V-E', 'Nat King Cole');
wedding.add("Love Shack", "The B-52's");


highSchool.complete(2);
wedding.complete(4);


college.complete(2); //doesn't exist yet
college.add('Viva La Vida', 'Coldplay');
college.add('So What', 'Pink');
college.add('Love Story', 'Taylor Swift');
college.complete(2); //does exist

college.updateSong(1, 'Fireflies', 'Owl City');


console.log(highSchool.playlist);
console.log(wedding.playlist);
console.log(college.playlist);























// // Add songs to playlist1
// playlist1.add("Song Title 1", "Song Artist 1");
// playlist1.add("Song Title 2", "Song Artist 2");

// // Add songs to playlist2
// playlist2.add("Song Title 3", "Song Artist 3");
// playlist2.add("Song Title 4", "Song Artist 4");

// // You can then access the different playlists and their songs
// console.log(playlist1.playlist); // Prints the songs in playlist1
// console.log(playlist2.playlist); // Prints the songs in playlist2





























// function Playlist(title, creator) {
	
// 	this.title = title,
// 	this.creator = creator,

// 	this.roar = function() {
// 		alert(`Now playing playlist: ${this.title}! Created by: ${this.creator}`);
// 	}


// }

// const highSchool = new Playlist('High School', 'Craig');
// const college = new Playlist('College', 'Bob');
// const clubbing= new Playlist('Clubbing', 'Frank');
// const wedding = new Playlist('Wedding', 'Joe');

// console.log(wedding.creator);

// college.roar();

// Playlist.prototype.whisper = function() {
//   console.log(`Hi I'm ${this.creator} and I created this playlist`)
// };

// wedding.whisper(); 



















// const playlistApp = {

// 	playlist: [],
// 	idIncrementor: 0,

// 	update(note = "") {
// 		console.log(`-------- ${note}`);
// 		console.log('playlist:', this.playlist);
		
// 	},

// 	add(songTitle, songArtist) {
// 		const song = {
// 			id: `a${this.idIncrementor++}`,
// 			title: songTitle,
// 			artist: songArtist
// 		};
// 		this.playlist = [...this.playlist, song];
//    // replaces .push(song);
// 		this.update(`Added ${songTitle} by ${songArtist}`);
// 	},

// 	remove(id) {
// 		var song = this.playlist[id];
// 		if(song) {
// 			this.playlist.splice(id, 1);
// 			this.update(`Removed ${song.title} by ${song.artist}`);
// 		}
// 	},

// 	complete(id) {
// 		var song = this.playlist[id];
// 		if(song) {
// 			song.complete = true;
// 			this.update(`Played ${song.title} by ${song.artist}`);
// 		}
// 	},

// 	updateSong(id, newTitle, newArtist) {
// 		var song = this.playlist[id];
// 		if(song) {
// 			song.title = newTitle;
// 			song.artist = newArtist;
// 			this.update(`Updated song with the ID of ${id}: new title is '${newTitle}', new artist is '${newArtist}'`);
// 		}
// 	},

// };

// const otherPlaylist = Object.assign( {}, playlistApp);

// playlistApp.add('Mr. Brightside', 'The Killers');
// playlistApp.add('In The End', 'Linkin Park');
// playlistApp.add('New Slang', 'The Shins');
// playlistApp.add('Electric Feel', 'MGMT');
// playlistApp.add('Ms. Jackson', 'OutKast');
// playlistApp.add('Backyard', 'Guster');
// playlistApp.add('My Girls', 'Animal Collective');
// playlistApp.add('Someday', 'The Strokes');
// playlistApp.add('Feel Good Inc', 'Gorillaz');


// playlistApp.complete(1);
// playlistApp.remove(2);
// playlistApp.updateSong(4, 'Photograph', 'Nickelback');

// otherPlaylist.add('All The Small Things', 'Blink-182');


