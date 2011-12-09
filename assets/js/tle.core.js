/* js */

$(document).ready(function() {		
	/* PLACEHOLDERS */
	$("input[placeholder], textarea[placeholder]").enablePlaceholder();
	
	$('#startexploring-button').click(function() {
		$('#form_explore').submit();
	});
	/* IMAGE CYCLER (MAY NOT BE USED) */
	$('img[switch]').hover(function() {
		$(this).attr('tmp', $(this).attr('src')).attr('src', $(this).attr('switch')).attr('switch', $(this).attr('tmp')).removeAttr('tmp');
	}).each(function() {
		$('<img />').attr('src', $(this).attr('switch'));
	});
	
	$('#contexploring a').click(function() {
		if ($(this).hasClass('hotel-s')) { window.location = 'hotels-surprise.html'; }
		else { window.location = 'http://localhost/surprise'; }
	});
	
	$('#contexploring-button').click(function() {
		$('#form_explore').submit();
	});
	
	$('#submenu-back').click(function() {
		parent.history.back();
        return false;
	});
	
	$('.manlocation-button').click(function() {
		var inputlocation = $('.manlocation-input').val();
		if (!inputlocation) { inputlocation = "Melbourne, FL"; }
		$.post('http://localhost/location', { "input-location": inputlocation }, function(data) {
			$('body').css('background','url(' + data.area_bg + ')');
			$('.manlocation-input').val(data.area_name);
			$('.manlocation-input').css('color','#2e2e2e');
			$('.area_id').val(data.area_id);
		});
	})
	
	$('#geolocate').click(function() {
		 $.getJSON("http://localhost/geolocate",
			function(data){
				$('body').css('background','url(' + data.area_bg + ')');
				$('.manlocation-input').val(data.area_name);
				$('.manlocation-input').css('color','#2e2e2e');
		});
	});
});