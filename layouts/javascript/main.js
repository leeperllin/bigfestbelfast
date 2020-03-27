function togglePass() {
	var x = document.getElementById('signInPassword');
	if (x.type === 'password') {
		x.type = 'text';
	} else {
		x.type = 'password';
	}
}

var swiper = new Swiper('.swiper-container', {
	spaceBetween: 30,
	centeredSlides: true,
	loop: true,
	effect: 'fade',
	autoplay: {
		delay: 6500,
		disableOnInteraction: false
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	}
});
