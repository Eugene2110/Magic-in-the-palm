window.onscroll = function(){

	var btn = document.getElementById('scroll');

	if( document.documentElement.scrollTop > 400 ){
		btn.style.display = "block";
	}else{
		btn.style.display = "none";
	}
}

function goToTop(){
	document.documentElement.scrollTop = 0;
}