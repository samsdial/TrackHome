var $ = jQuery;
$(document).ready(function () {

	//js-slider-offer
	$('.js-partners').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 1,
					dots: false,
					arrows: false,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					dots: false,
					arrows: false,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: false,
					arrows: false,
				}
			}
		]
	});
	$('.js-people').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 1,
					dots: false,
					arrows: false,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
					arrows: false,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
					arrows: false,
				}
			}
		]
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
	if (this.hasAnimateOnScrollElements && !this.aosRefreshed && AOS !== undefined) {
		this.aosRefreshed = true;
		AOS.refresh();
	}
	$('.nav-link').on('click', function () {
		$('.navbarNavDropdown').removeClass('collapse');
		$('.navbarNavDropdown').removeClass('show');
	});
});


const animateCSS = (element, animation, prefix = 'animate__') =>
	// We create a Promise and return it
	new Promise((resolve, reject) => {
		const animationName = `${prefix}${animation}`;
		const node = document.querySelector(element);

		node.classList.add(`${prefix}animated`, animationName);

		// When the animation ends, we clean the classes and resolve the Promise
		function handleAnimationEnd() {
			node.classList.remove(`${prefix}animated`, animationName);
			node.removeEventListener('animationend', handleAnimationEnd);

			resolve('Animation ended');
		}

		node.addEventListener('animationend', handleAnimationEnd);
	});

//


window.onload = function () {
	AOS.init({
		useClassNames: true,
		initClassName: false,
		animatedClassName: 'animated',
	});


}
//
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


document.addEventListener('click', function (event) {
	let navbar = document.querySelector('#navbarNavDropdown');
	let button = document.querySelector('.navbar-toggler');
	if (event.target.matches('.nav-link')) {
		navbar.classList.remove('show');
		button.setAttribute('aria-expanded', 'false');
		// alert("remove faq display!");
	}
}, false);

document.body.addEventListener('scroll', () => {
	let scrollHeight = document.body.scrollTop;
	let header = document.querySelector('.navbar');
	//console.log(document.documentElement.scrollTop || document.body.scrollTop);
	//console.log(document.body.scrollTop);

	if (0 < scrollHeight) {
		header.classList.add("fixed-top");
		header.classList.add("bgc-black");
	} else if (0 >= scrollHeight) {
		header.classList.remove("fixed-top");
		header.classList.remove("bgc-black");
	}
	//
	let animated = document.querySelector('.animate__animated');
	if (1899 == scrollHeight) {
		animated.classList.add("animate__fadeInDown");
		console.log('open')
	}
	// scrollHeight = scrollY;
})
