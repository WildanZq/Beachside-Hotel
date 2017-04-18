function EasyPeasyParallax() {
    
	scrollPos = $(this).scrollTop();
    
	$('.parallax').css({
		'background-position' : '50% ' +(-(scrollPos-550)/4)+"px"
	});
}

$(document).ready(function(){
	$(window).scroll(function() {
		EasyPeasyParallax();
	});
});