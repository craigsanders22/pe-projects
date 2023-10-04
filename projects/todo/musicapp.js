const playlistApp = {
  
  playlist: [],
  count: 0,
  
  update: function(note = "") {
    console.log(`-------- ${note}`);
    console.log('playlist:', this.playlist);
  },

  add: function(songTitle, songArtist) {
    const song = {
      id: this.count++,
      title: songTitle,
      artist: songArtist
    };
    this.playlist = [...this.playlist, song];
   // .push(song);
    this.update(`Added ${songTitle} by ${songArtist}`);
  },

  remove: function(id) {
    var song = this.playlist[id];
    if(song) {
      this.update(`Removed ${song.title} by ${song.artist}`);
      this.playlist.splice(id, 1);
    }
  },

  complete: function(id) {
    var song = this.playlist[id];
    if(song) {
      song.complete = true;
      this.update(`Played ${song.title} by ${song.artist}`);
    }
  },
  
  updateSong: function(id, newTitle, newArtist) {
    var song = this.playlist[id];
    if(song) {
      song.title = newTitle;
      song.artist = newArtist;
      this.update(`Updated song with the ID of ${id}: new title is '${newTitle}', new artist is '${newArtist}'`);
    }
  },
  
};

console.log( playlistApp.update("Hello") );


playlistApp.add('Counting Cars', 'Snow Patrol');
playlistApp.add('Backyard', 'Guster');
playlistApp.add('Counting Cars', 'Snow Patrol');
playlistApp.complete(1);
playlistApp.remove(2);


