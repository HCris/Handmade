var $carousel = $('.carousel').flickity({
  imagesLoaded: true,
  percentPosition: false,
});

var $imgs = $carousel.find('.carousel-cell img');
// get transform property
var docStyle = document.documentElement.style;
var transformProp = typeof docStyle.transform == 'string' ?
  'transform' : 'WebkitTransform';
// get Flickity instance
var flkty = $carousel.data('flickity');

$carousel.on( 'scroll.flickity', function() {
	flkty.slides.forEach( function( slide, i ) {
	var img = $imgs[i];
	var x = ( slide.target + flkty.x ) * -1/3;
	img.style[ transformProp ] = 'translateX(' + x  + 'px)';
	});
});
/*************************************magnific popup***************************////
$(document).ready(function() {
	$('.corp').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Oxy</small>';
			}
		}
	});
});
/*************************************work.php***************************////
$(document).ready(function() {
    $("[rel='tooltip']").tooltip();
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    );
 });
/**************************************validtion login forme************************////
$(document).ready(function(){
	validtion_login_form($("#login"));
});
function validtion_login_form(form){
	form.submit(function(e) {
		e.preventDefault();
		var username = form.find('input[name="username"]').val();
		var password = form.find('input[name="password"]').val();
		$.ajax({
			method: 'POST',
			url: "component/login.php",
			data: {
				username:username,
				password:password
			}
		}).done(function(e) {
			if ($('#response').length) {
				('#response').remove();
			}
			var message = $('<p id="response">' + e + '</p>');
			form.prepend(message);
		});
	});
};
/************************************validarea formelor din contat.php*/
$(document).ready(function(){
	validtion_login_form($("#message"));
});
function validation_message_form(form){
	form.submit(function(e){
		e.preventDefault();
		var name = form.find('input[name="name"]').val();
		var email = form.find('input[name="email"').val();
		var phone = form.find('input[name="number"').val();
		var message = form.find('textarea[name="message"]').val();
		$.ajax({
			method: 'POST',
			url: "contact_me.php",
			data:{
				name:name,
				email:email,
				number:number,
				message:message
			}
		}).done(function(e){
				if ($('#raspuns').length){
					('#raspuns').remove();
				}
				var error = $('<p id="raspuns">' + e + '</p>');
				form.prepend(error);
		});
	});
};
