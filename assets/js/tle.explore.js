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
	});
	
	$('#listing ul li a').mouseover(function() {
		$(this).parent().children('.listing-icon').css('background-position','0 -12px');
	});
	
	$('#listing ul li a').mouseout(function() {
		$(this).parent().children('.listing-icon').css('background-position','0 0');
	});
	
	$('#submenu-refresh').click(function() {
		$('.listings-container').fadeOut(500);
		$('.listings-container').fadeIn(500);
	});
	
	$('a.view-more').click(function() {
		$('.listings-container').fadeOut(500);
		$('.listings-container').fadeIn(500);
	});
	
	$('body').click(function(event) {
		if (!$(event.target).is('#contexploring-input')) { $('.contexploring-list').hide(); }
		if ($(event.target).is('.contexploring-list li')) { $('.contexploring-list').hide(); }
	});
});