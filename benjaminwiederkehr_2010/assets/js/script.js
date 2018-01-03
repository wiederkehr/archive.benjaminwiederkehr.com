$(document).ready(function(){
	$('dd').defuscate();
	$('#archive_panel').hide();
	$('#panel_toggle').click(
		function(){
			$('#archive_panel').slideToggle();
			$(this).toggleClass('current');
			$('#footer').toggleClass('expanded');
			var targetOffset = $(this).offset().top;
			$('html,body').animate({scrollTop: targetOffset}, 1000);
			return false;
		}
	);
});
jQuery.fn.defuscate = function( settings ) {
	settings = jQuery.extend({
		link: true
		}, settings);
		var regex = /\b([A-Z0-9._%-]+)\([^)]+\)((?:[A-Z0-9-]+\.)+[A-Z]{2,6})\b/gi;
		return this.each(function() {
			if ( $(this).is('a[@href]') ) {
				// If it's an <a> element, defuscate the href attribute
				$(this).attr('href', $(this).attr('href').replace(regex, '$1@$2'));
				// Make sure that the element's contents is not made into a link
				var is_link = true;
				//alert($(this).attr('href'));
			}
			// Defuscate the element's contents
			$(this).html($(this).html().replace(regex, (settings.link && !is_link ? '<a href="mailto:$1@$2">$1@$2</a>' : '$1@$2')));
		}
	);
}
