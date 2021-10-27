$('.navbar-top .navbar-nav a').on('click',function (e) {
	// e.preventDefault();

	var target = this.hash,
	$target = $(target);

   $('html, body').stop().animate({
	 'scrollTop': $target.offset().top-160
	}, 700, 'swing', function () {
	 window.location.hash = target;
	});
});