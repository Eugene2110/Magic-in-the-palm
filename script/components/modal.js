function showModal( event ){

	var imgSrc =  event.target.parentNode.style.backgroundImage;
	imgSrc = imgSrc.slice(5, -2);

	$('#modal_image').attr('src', imgSrc);

	$('#modal').animate({
		opacity: 'toggle',
		display: 'flex'
	});
}

function hideModal(){
	$('#modal').animate({
		opacity: 'toggle',
		display: 'flex'
	});
}