/* js */

$(document).ready(function() {		
	/* PLACEHOLDERS */
	$("input[placeholder], textarea[placeholder]").enablePlaceholder();
	
	$('#startexploring-button').click(function() {
		window.location = 'explore.html';
	});
	/* IMAGE CYCLER (MAY NOT BE USED) */
	$('img[switch]').hover(function() {
		$(this).attr('tmp', $(this).attr('src')).attr('src', $(this).attr('switch')).attr('switch', $(this).attr('tmp')).removeAttr('tmp');
	}).each(function() {
		$('<img />').attr('src', $(this).attr('switch'));
	});
	
	$('#contexploring a').click(function() {
		if ($(this).hasClass('hotel-s')) { window.location = 'hotels-surprise.html'; }
		else { window.location = 'surprise.html'; }
	});
	
	$('#contexploring-button').click(function() {
		window.location = 'explore.html';
	});
	
	$('#submenu-back').click(function() {
		parent.history.back();
        return false;
	});
	
	$('#geolocate').click(function() {
		 $.getJSON("http://localhost/geolocate",
			function(data){
				$('body').css('background','url(' + data.area_bg + ')');
				$('.manlocation-input').val(data.area_name);
				$('.manlocation-input').css('color','#2e2e2e');
		});
	});
});