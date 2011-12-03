/* js */

$(document).ready(function() {		
	/* FRONTPAGE BUTTONS */
	$('#startexploring-button-h').click(function() {
		window.location = 'hotels-explore.html';
	});
	
	$('#contexploring-button-h').click(function() {
		window.location = 'hotels-explore.html';
	});
	
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
	
	$('#surprise').click(function() {
		window.location = 'hotels-surprise.html';
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
	
	$('#contexploring-input').click(function() {
		$('.contexploring-list').toggle();
	});
	
	$('.contexploring-list li').click(function() {
		$('.contexploring-list').toggle();
		$('#contexploring-input').text($(this).attr('textval'));
		$('.contexploring-select').val($(this).attr('optionval'));
		$('#contexploring-input').css('color','#333');
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

	$('#submenu-refresher').click(function() {
		$('#toprow').animate({"height": "234px"}, "fast");
		$('#botrow').animate({"height": "234px"}, "fast");
		for (i = 1; i <= 6; i++) {
			$('#toprow .main-listing-' + i).show();
			$('#toprow .sub-listing-' + i).hide();
			$('#botrow .main-listing-' + i).show();
			$('#botrow .sub-listing-' + i).hide();
		}
		$('.surprise-container').fadeOut(500);
		$('.surprise-container').fadeIn(500);
	});
	
	$('a.view-more-s').click(function() {
		$('#toprow').animate({"height": "234px"}, "fast");
		$('#botrow').animate({"height": "234px"}, "fast");
		for (i = 1; i <= 6; i++) {
			$('#toprow .main-listing-' + i).show();
			$('#toprow .sub-listing-' + i).hide();
			$('#botrow .main-listing-' + i).show();
			$('#botrow .sub-listing-' + i).hide();
		}
		$('.surprise-container').fadeOut(500);
		$('.surprise-container').fadeIn(500);
	});
	
	$('#geolocate').click(function() {
		window.location = 'hotels-experience.html';
	});
	
	$('.manlocation-button').click(function() {
		window.location = 'hotels-experience.html';
	});
	
	$('#hotels-exp-button').click(function() {
		window.location = 'hotels-choose.html';
	});
	
	$('.hoteladdy').change(function() {
		window.location = 'hotels-final.html';
	});
	
	$('body').click(function(event) {
		if (!$(event.target).is('#contexploring-input')) { $('.contexploring-list').hide(); }
		if ($(event.target).is('.contexploring-list li')) { $('.contexploring-list').hide(); }
	});
});