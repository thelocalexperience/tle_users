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
	
	$('.surprise-listing').mouseover(function() {
		$(this).children('.surprise-listing-plus').css('background-position','0 -15px');
	});
	
	$('.surprise-listing').mouseout(function() {
		$(this).children('.surprise-listing-plus').css('background-position','0 0');
	});
	
	$('#toprow .surprise-listing').click(function() {
		for (i = 1; i <= 6; i++) {
			$('#toprow .main-listing-' + i).show();
			$('#toprow .sub-listing-' + i).hide();
		}
		
		var nextListing = $(this).attr('thislisting') * 1 + 1;
		$(this).hide();
		
		if (nextListing > 6) { $('#toprow .main-listing-5').hide(); }
		else { $('#toprow .main-listing-' + nextListing).hide(); }
		$('#toprow').animate({"height": "275px"}, "fast");
		$('#toprow .sub-listing-' + $(this).attr('thislisting')).show();
	});
	
	$('#toprow .close-sub-listing').click(function() {
		for (i = 1; i <= 6; i++) {
			$('#toprow .main-listing-' + i).show();
			$('#toprow .sub-listing-' + i).hide();
		}
		$('#toprow .sub-listing-' + $(this).attr('thislisting')).hide();
		$('#toprow').animate({"height": "234px"}, "fast");
	});
	
	$('#botrow .surprise-listing').click(function() {
		for (i = 1; i <= 6; i++) {
			$('#botrow .main-listing-' + i).show();
			$('#botrow .sub-listing-' + i).hide();
		}
		
		var nextListing = $(this).attr('thislisting') * 1 + 1;
		$(this).hide();
		
		if (nextListing > 6) { $('#botrow .main-listing-5').hide(); }
		else { $('#botrow .main-listing-' + nextListing).hide(); }
		$('#botrow').animate({"height": "275px"}, "fast");
		$('#botrow .sub-listing-' + $(this).attr('thislisting')).show();
	});
	
	$('#botrow .close-sub-listing').click(function() {
		for (i = 1; i <= 6; i++) {
			$('#botrow .main-listing-' + i).show();
			$('#botrow .sub-listing-' + i).hide();
		}
		$('#botrow .sub-listing-' + $(this).attr('thislisting')).hide();
		$('#botrow').animate({"height": "234px"}, "fast");
	});

	$('#submenu-refresh').click(function() {
		$('#toprow').animate({"height": "234px"}, "fast");
		$('.surprise-container').html('');
		$('.surprise-container').html('<div id="loading-ajax" class="rounded-2 shadowed">Loading New Experiences...</div>');
		$.ajax({
			url: 'http://localhost/surprise/grab',
			success: function(data) {
				$('.surprise-container').html(data);
				for (i = 1; i <= 6; i++) {
					$('#toprow .main-listing-' + i).show();
					$('#toprow .sub-listing-' + i).hide();
				}
			}
		});
	});
	
	$('a.view-more').click(function() {
		$('#toprow').animate({"height": "234px"}, "fast");
		$('.surprise-container').html('');
		$('.surprise-container').html('<div id="loading-ajax" class="rounded-2 shadowed">Loading New Experiences...</div>');
		$.ajax({
			url: 'http://localhost/surprise/grab',
			success: function(data) {
				$('.surprise-container').html(data);
				for (i = 1; i <= 6; i++) {
					$('#toprow .main-listing-' + i).show();
					$('#toprow .sub-listing-' + i).hide();
				}
			}
		});
	});
	
	$('body').click(function(event) {
		if (!$(event.target).is('#contexploring-input')) { $('.contexploring-list').hide(); }
		if ($(event.target).is('.contexploring-list li')) { $('.contexploring-list').hide(); }
	});
});