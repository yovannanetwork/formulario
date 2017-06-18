//https://www.youtube.com/watch?v=DdbaUPHD_Uc
//funcion para reproducir video
var videoPlay = document.getElementById('video');
var boton = document.getElementById('boton');
function play(){
	if(videoPlay.paused){
		videoPlay.play();
		boton.innerHTML = '<i class="fa fa-pause"></i>';
	}else{
		videoPlay.pause();
		boton.innerHTML = '<i class="fa fa-play"></i>';
	}
}
function mouseOver(){
	var boton = document.getElementById('boton');
	if(videoPlay.paused){
		boton.style.visibility = 'visible';
	}else{
		boton.style.visibility = 'hidden';
	}
}
