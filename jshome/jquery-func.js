Cufon.replace('h2', { fontFamily: "Myriad Pro"});

function mycarousel_initCallback(carousel) {
	    $('.slider-navigation a').bind('click', function() {
	        carousel.scroll($.jcarousel.intval($(this).text()));
	        return false;
	    });	        
};
	
function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
	$('.slider-navigation a').removeClass('active');
	$('.slider-navigation a').eq(idx-1).addClass('active');
};

var navigationactiveflag; 

$(document).ready(function(){
	
	
	Cufon.replace('#navigation a', { textShadow: '#fff 1px 1px' });
	Cufon.replace('#navigation a.active', { textShadow: '#000 1px 1px' });
	
	$('#navigation a').hover(function(){
		navigationactiveflag = $(this).hasClass("active");
		$(this).addClass("active");
		Cufon.refresh();
		
	},
	function()
	{
		if(!navigationactiveflag) $(this).removeClass('active');
		Cufon.refresh();
		
	});
	
	$(".slider-holder ul").jcarousel({
		scroll: 1,
        wrap:"both",
        auto: 4,
        start: 1,
        itemFirstInCallback: mycarousel_itemFirstInCallback,
        initCallback: mycarousel_initCallback,
        // This tells jCarousel NOT to autobuild prev/next buttons
        buttonNextHTML: null,
        buttonPrevHTML: null	
	});
});