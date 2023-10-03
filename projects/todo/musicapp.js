

function update(note = "") {
    console.log(`-------- ${note}`);
    console.log('playlist:', playlist);
}

const playlist = [];
var count = 0;

function add(songTitle, songArtist) {
    const song = {
        id: count++,
        title: songTitle,
        artist: songArtist
    };
    playlist.push(song);
    update(`Added ${songTitle} by ${songArtist}`);
}

function remove(id) {
        var song = playlist[id];
        update(`Removed ${song.title} by ${song.artist}`);
        playlist.splice(id, 1);
    };

function complete(id) {
	var song = playlist[id];
	if(song) {
		song.complete = true;
		update(`Played ${song.title} by ${song.artist}`);
	};
}




add('Viva La Vida', 'Coldplay');
add('Yesterday', 'The Beatles');
add('Yellow', 'Coldplay');
add('Come Together', 'The Beatles');
add('The Scientist', 'Coldplay');
add('Something', 'The Beatles');
add('Paradise', 'Coldplay');
add('Hey Jude', 'The Beatles');
complete (1);
remove (3);
add('Come Together', 'The Beatles');