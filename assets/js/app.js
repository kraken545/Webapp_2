// ================ Reviews ================
function scrollCarouselLeft() {
	const carousel = document.getElementById('reviewsCarousel');
	carousel.scrollBy({
		left: -600,
		behavior: 'smooth'
	});
}

function scrollCarouselRight() {
	const carousel = document.getElementById('reviewsCarousel');
	carousel.scrollBy({
		left: 600,
		behavior: 'smooth'
	});
}