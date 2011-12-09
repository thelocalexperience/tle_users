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
		$('.listings-container').html('');
		$('.listings-container').html('<div id="loading-ajax" class="rounded-2 shadowed">Loading New Experiences...</div>');
		var explore_option = $('.explore-page-val').val();
		var area_id = $('.area_id').val();
		$.post('http://localhost/explore/grab', { "explore-opt": explore_option, "area_id": area_id }, function(data) {
			$('.listings-container').html('');
			$('.listings-container').html(data);
		});
	});
	
	$('a.view-more').click(function() {
		$('.listings-container').html('');
		$('.listings-container').html('<div id="loading-ajax" class="rounded-2 shadowed">Loading New Experiences...</div>');
		var explore_option = $('.explore-page-val').val();
		var area_id = $('.area_id').val();
		$.post('http://localhost/explore/grab', { "explore-opt": explore_option, "area_id": area_id }, function(data) {
			$('.listings-container').html('');
			$('.listings-container').html(data);
		});
	});
	
	$('body').click(function(event) {
		if (!$(event.target).is('#contexploring-input')) { $('.contexploring-list').hide(); }
		if ($(event.target).is('.contexploring-list li')) { $('.contexploring-list').hide(); }
	});
});