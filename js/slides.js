$(function() { 
	$(".rslides").responsiveSlides({ 
		auto: true,
		speed: 500,
		timeout: 4000,
		pager: true,
		nav: false,
		random: false,
		pause: true,
		pauseControls: true,
		prevText: "Previous",
		nextText: "Next",
		maxwidth: "",
		navContainer: "",
		manualControls: "",
		namespace: "rslides",
		before: function(){},
		after: function(){}
	}); 
});