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
	
	$('.update-types-deal').click(function() {
		$('.update-content-shout').hide();
		$('.update-types-shout').removeClass('active');

		$('.update-content-calendar').hide();
		$('.update-types-calendar').removeClass('active');
		
		$('.update-content-deal').fadeIn('fast');
		$(this).addClass('active');
	});
	
	$('.update-types-shout').click(function() {
		$('.update-content-deal').hide();
		$('.update-types-deal').removeClass('active');

		$('.update-content-calendar').hide();
		$('.update-types-calendar').removeClass('active');
		
		$('.update-content-shout').fadeIn('fast');
		$(this).addClass('active');
	});
	
	$('.update-types-calendar').click(function() {
		$('.update-content-deal').hide();
		$('.update-types-deal').removeClass('active');

		$('.update-content-shout').hide();
		$('.update-types-shout').removeClass('active');
		
		$('.update-content-calendar').fadeIn('fast');
		$(this).addClass('active');
	});
	
	$('.update-row-close').click(function() {
		$('.update-row').slideUp('fast');
		$('.update-content-shout').hide();
		$('.update-types-shout').removeClass('active');

		$('.update-content-calendar').hide();
		$('.update-types-calendar').removeClass('active');
		
		$('.update-content-deal').fadeIn('fast');
		$('.update-types-deal').addClass('active');
	});
	
	$('.surprise-listing').click(function() {
		if ($(this).attr('clicktype') == 'update') {
			$('.update-content-shout').hide();
			$('.update-types-shout').removeClass('active');

			$('.update-content-calendar').hide();
			$('.update-types-calendar').removeClass('active');
		
			$('.update-content-deal').fadeIn('fast');
			$('.update-types-deal').addClass('active');
			
			$('.update-row').slideUp('fast');
			$('.update-row').slideDown('fast');
		}
		
		if ($(this).attr('clicktype') == 'normal') {
			window.location = 'profile.html';
		}
	});
	
	$('body').click(function(event) {
		if (!$(event.target).is('#contexploring-input')) { $('.contexploring-list').hide(); }
		if ($(event.target).is('.contexploring-list li')) { $('.contexploring-list').hide(); }
	});
});