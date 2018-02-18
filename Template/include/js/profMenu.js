$(function(){
	$('a#lnkUserProfil').click(function (e){
		e.stopPropagation();
		$('ul.dropdown-menu').toggle('slow');
	});
	/*when the user click outside the*/
	$(document).mouseup(function (e){
		var el = $('ul.dropdown-menu');
		if(!el.is(e.target) && el.has(e.target).length === 0){
			el.fadeOut();
		}
	});
});