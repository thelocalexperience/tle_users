/* js */

$(document).ready(function() {		
	/* PLACEHOLDERS */
	$('.settings-swap').click(function() {
		swapref = $(this).attr('swapref');
		$('.settings-swap').each(function() { $(this).removeClass('active'); });
		$(this).addClass('active');
		$('.settings-1').hide();
		$('.settings-2').hide();
		$('.settings-3').hide();
		$('.settings-4').hide();
		$('.settings-'+swapref).toggle();
	});
});