var indice = 0;
init();

function init(){
    var audio = document.getElementById('audio');
    var playlist = document.getElementById('playlist');
    var tracks = playlist.getElementsByTagName('a');
    audio.volume = 0.5;
    audio.play();
    var canciones=1;
    for(var track in tracks) {
      var link = tracks[track];
      if(typeof link === "function" || typeof link === "number") 
        {
          continue;
        }
      
			link.addEventListener('click', function(e) {
      	e.preventDefault();
        var song = this.getAttribute('href');
        for(i = 0; i<tracks.length; i++){
           if (tracks[i]==this){
              indice = i;
           }
        }
       	run(song, audio, this);
      });
    }
    
    audio.addEventListener('ended',function(e) {
       total= tracks.length;
       indice++;
       if (indice == total){
          indice= 0;
       }
       var link = tracks[indice];       
       run(link, audio, link);
    }
   );
}

function run(song, audio, link){
				var parent = link.parentElement;
				//quitar el active de todos los elementos de la lista
				var items = parent.parentElement.getElementsByTagName('li');
        for(var item in items) {
					if(items[item].classList)
        		items[item].classList.remove("active");
        }
        
        //agregar active a este elemento
        parent.classList.add("active");
        
        //tocar la cancion
        audio.src = song;
        audio.load();
        audio.play();
}

function reinicio(){
	var audio = document.getElementById('audio');
	audio.load();
	audio.play();
}

function listadoAleatorio(){
  var audio = document.getElementById('audio');
  var ul = document.querySelector('#playlist');

  for (var i = ul.children.length; i >= 0; i--) {
      ul.appendChild(ul.children[Math.random() * i | 0]);
  }
  var tracks = ul.getElementsByTagName('a');
  run(tracks[0], audio, tracks[0]);
  indice= 0;
}