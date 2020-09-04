var $ = jQuery;
$(document).ready(function () {
	//js-slider-offer
	$('.js-list-partners').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
	});
	$('.js-list-people').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
	});
	$('.js-app').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		fade: true,
		cssEase: 'linear',
		arrows: false,
	});

	$('.js-race').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		fade: true,
		cssEase: 'linear',
		arrows: false,
	});

});
