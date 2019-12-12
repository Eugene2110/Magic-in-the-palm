var menu = document.getElementById('menu');
var menuImg = document.getElementById('menuImg');

$('#menuImg').click(function(){
	$('#menu').animate({
		opacity: 'toggle',
		height: 'toggle'
	});
});

window.onclick = function( event ){

	if( event.target != menu && event.target!=menuImg ){
		$('#menu').animate({
			opacity: 'toggle',
			height: 'toggle'
		});
	}

}