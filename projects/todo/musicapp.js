
console.clear();

localStorage.clear();




function Playlist(title, creator) {
    this.title = title;
    this.creator = creator;
    this.playlist = [];
    // load existing/current playlist from localStorage 
    var storedPlaylist = localStorage.getItem('playlist');
    if (storedPlaylist) {
        this.playlist = JSON.parse(storedPlaylist);
    }
    // id creator 
    this.idIncrementor = this.playlist.length;

    // save method used in all functions / available for parsing
    this.save = function() {
        localStorage.setItem('playlist', JSON.stringify(this.playlist));
    }

    this.add = function(songTitle, songArtist) {
        const song = {
            id: `a${this.idIncrementor++}`,
            title: songTitle,
            artist: songArtist
        };
        this.playlist.push(song);
        console.log(`Added ${songTitle} by ${songArtist}`);
        this.save();
    };

    this.remove = function(id) {
        var song = this.playlist[id];
        if(song) {
            this.playlist.splice(id, 1);
            console.log(`Removed ${song.title} by ${song.artist}`);
            this.save();
        }
    };

    this.complete = function(id) {
        var song = this.playlist[id];
        if(song) {
            song.complete = true;
            console.log(`Played ${song.title} by ${song.artist}`);
            this.save();
        }
    };

    this.updateSong = function(id, newTitle, newArtist) {
        var song = this.playlist[id];
        if(song) {
            song.title = newTitle;
            song.artist = newArtist;
            console.log(`Updated song with the ID of ${id}: new title is '${newTitle}', new artist is '${newArtist}'`);
            this.save();
        }
    };
}




// Playlist.prototype.add = function(songTitle, songArtist) {
// 	const song = {
// 		id: `a${this.idIncrementor++}`,
// 		title: songTitle,
// 		artist: songArtist
// 	};
// 	this.playlist = [...this.playlist, song];
// 	this.update(`Added ${songTitle} by ${songArtist}`);
// };

// Playlist.prototype.remove = function(id) {
// 	var song = this.playlist[id];
// 	if(song) {
// 		this.playlist.splice(id, 1);
// 		this.update(`Removed ${song.title} by ${song.artist}`);
// 	}
// };

// Playlist.prototype.complete = function(id) {
// 	var song = this.playlist[id];
// 	if(song) {
// 		song.complete = true;
// 		this.update(`Played ${song.title} by ${song.artist}`);
// 	}
// };

// Playlist.prototype.updateSong = function(id, newTitle, newArtist) {
// 	var song = this.playlist[id];
// 	if(song) {
// 		song.title = newTitle;
// 		song.artist = newArtist;
// 		this.update(`Updated song with the ID of ${id}: new title is '${newTitle}', new artist is '${newArtist}'`);
// 	}
// };







// the data 
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



















