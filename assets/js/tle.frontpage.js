/* js */

$(document).ready(function() {
	/* FRONTPAGE BUTTONS */
	$('#surprise').mouseover(function() {
		$('#surprise-icon').css('background-position','0 -60px');
	});
	
	$('#surprise').mouseout(function() {
		$('#surprise-icon').css('background-position','0 0');
	});
	
	$('#tlelive').mouseover(function() {
		$('#tlelive-icon').css('background-position','0 -60px');
	});
	
	$('#tlelive').mouseout(function() {
		$('#tlelive-icon').css('background-position','0 0');
	});
	
	$('#tlelive').click(function() {
		if ($('#theliveexperience').is(':visible')) {
			$('#theliveexperience').slideUp('fast');
		}
		
		else {
			$('#theliveexperience').slideDown('fast');
		}
	});
	
	$('.theliveexperience-close').click(function() {
		$('#theliveexperience').slideUp('fast');
	});
	
	$('#theliveexperience-refresh').click(function() {
		$('#theliveexperience').fadeOut(700);
		$('#theliveexperience').fadeIn(700);
	});
	
	/* DROPDOWN LIST CONTROLS */
	$('#startexploring-input').click(function() {
		$('.startexploring-list').toggle();
	});
	
	$('.startexploring-list li').click(function() {
		$('.startexploring-list').toggle();
		$('#startexploring-input').text($(this).attr('textval'));
		$('.startexploring-select').val($(this).attr('optionval'));
		$('#startexploring-input').css('color','#333');
	});
	
	$('body').click(function(event) {
		if (!$(event.target).is('#startexploring-input')) { $('.startexploring-list').hide(); }
		if ($(event.target).is('.startexploring-list li')) { $('.startexploring-list').hide(); }
	});
});