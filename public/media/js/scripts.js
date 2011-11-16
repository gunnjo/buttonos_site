$(window).ready(function(){
	$("div#navigation").cloudMenu({animationDuration: 350});
});

$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
	//	animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next & Prev
		directionNavHide:true, //Only show on hover
		controlNav:true, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		controlNavThumbsSearch: '.jpg', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0 //Universal caption opacity
	});
});

Cufon.replace('h2, .navigation_top, .description h1, .description h2, h3, .sidebar h4', {fontFamily: 'Enigmatic Regular'});
Cufon.replace('.infoh4, #header-logo h1', { fontFamily: 'Enigmatic Regular' });

/*
$(document).ready(function() {
	$("a[rel=lightbox]").fancybox({
		'showCloseButton'	: true,
		'padding'			: 0,
		'hideOnContentClick': true,
		'centerOnScroll'	: true,
		'overlayOpacity'	: 0.6,
		'overlayColor'		: '#000',
		'easingIn'			: 'easeInExpo',
		'easingOut'			: 'easeInExpo',
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic',
		'enableEscapeButton': true,
		'titleShow'			: false,
		'titlePosition' 	: 'over',
		'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
			return '<span id="fancybox-title-over">' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
		}
	});

	$("#fancy").fancybox({
		'padding'			: 0,
		'autoScale'			: false,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none'
	});
});
*/

$(document).ready(function(){

	$("#content-slider").codaSlider({
		dynamicArrows: false,
		dynamicTabs: false,
		autoHeight: true,
		crossLinking: true,
		slideEaseDuration: 750
	});

	$('#contactform').submit(function(){
	
		var action = $(this).attr('action');
		
		$('#contactform #submit').attr('disabled','disabled').after('<img src="media/img/template/ajax-loader.gif" class="loader" />');
		
		$("#message").slideUp(750,function() {
		$('#message').hide();			
		
		$.post(action, { 
			name: $('#name').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			subject: $('#subject').val(),
			comments: $('#comments').val(),
			verify: $('#verify').val()
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#contactform img.loader').fadeOut('fast',function(){$(this).remove()});
				$('#contactform #submit').attr('disabled',''); 
				if(data.match('success') != null) $('#contactform').slideUp('slow');
			}
		);

		});

		return false;
	});
});