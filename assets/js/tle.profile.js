/* js */

$(document).ready(function() {			
	/* DROPDOWN LIST CONTROLS */
	$('#contexploring-input').click(function() {
		$('.contexploring-list').toggle();
	});
	
	$('.contexploring-list li').click(function() {
		$('.contexploring-list').toggle();
		$('#contexploring-input').text($(this).attr('textval'));
		$('.contexploring-select').val($(this).attr('optionval'));
		$('#contexploring-input').css('color','#333');
	});
	
	$('.profile-highlights-l').click(function() {
		$('#profile-highlights-a').toggle('slideDown');
	});
	
	$('body').click(function(event) {
		if (!$(event.target).is('#contexploring-input')) { $('.contexploring-list').hide(); }
		if ($(event.target).is('.contexploring-list li')) { $('.contexploring-list').hide(); }
	});
});