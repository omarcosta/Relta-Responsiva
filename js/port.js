// Function to reveal lightbox and adding YouTube autoplay
	function revealVideo(div,video_id) {
	  var video = document.getElementById(video_id).src;
	  document.getElementById(video_id).src = video+'?autoplay=1'; // adding autoplay to the URL
	  document.getElementById(div).style.display = 'block';
	}

	// Hiding the lightbox and removing YouTube autoplay
	function hideVideo(div,video_id) {
	  var video = document.getElementById(video_id).src;
	  var cleaned = video.replace('&autoplay=1',''); // removing autoplay form url
	  document.getElementById(video_id).src = cleaned;
	  document.getElementById(div).style.display = 'none';
	}

	function addClass(id,add){
		var newclass = document.querySelector(id)
		newclass.classList.add(add)	
	}

	function remClass(id,atr){
		var newclass = document.querySelector(id)
		newclass.classList.remove(atr)
	}
	function addAtributo(id,atributo){
		var newatr = document.querySelector(id);
		newatr.style = atributo;
	}
	function remAtributo(id,atributo){
		var atr = document.querySelector(id);
		atr.removeAttribute(atributo); 
	}
	function recarregar(url){
		window.location.href = url
	}