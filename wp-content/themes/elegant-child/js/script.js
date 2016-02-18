jQuery(document).ready( function() {
	about_us();
});

function about_us() {
	jQuery("#site-navigation #menu-main-menu .menu-item-19 a").on("mouseover", function() {
		var open = jQuery('div#header-rollover').attr('data-open');
		
		if (open == 0) {
			jQuery('div#header-rollover').stop(true, true).animate({
				height: '472px'
			}, 1000, function() {
				jQuery('div#header-rollover').attr('data-open', 1);
				about_close();
			});
			
			jQuery(this).parent().css('background-position', 'center -22px');
		}
	});
}

function about_close() {
	var open = jQuery('div#header-rollover').attr('data-open');

	jQuery('div#block-menu-block-1').not('li.menu-item-19 a').mouseenter(function(){
		if(open==1){
			jQuery('div#header-rollover').animate({
				height: '0px'
			}, 1000, function(){
				jQuery('div#header-rollover').attr('data-open', 0);
			});
			jQuery("#site-navigation #menu-main-menu .menu-item-19").css('background-position', 'center 16px');
		}
	});
	
	jQuery('div#main').mouseenter(function(){
		if(open==1){
			jQuery('div#header-rollover').animate({
				height: '0px'
			}, 1000, function(){
				jQuery('div#header-rollover').attr('data-open', 0);
			});
			jQuery("#site-navigation #menu-main-menu .menu-item-19").css('background-position', 'center 16px');
		}
	});
}
