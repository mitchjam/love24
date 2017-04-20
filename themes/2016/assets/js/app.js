window.jQuery = window.$ = require('../vendor/jquery-3.1.1.min.js');
window.Tether = require('../vendor/tether/dist/js/tether.js');
require('../vendor/bootstrap/dist/js/bootstrap.js');

function chopReview() {
	if (document.querySelector('.home') != null && document.querySelector('.video-embed')) {
		var videoHeight = document.querySelector('.video-embed').clientHeight;
		var singleLineHeight = document.querySelector('.ellipsis-reference').clientHeight;
		var reviewWidth = document.querySelector('.video-review').clientWidth;
		var averageCharWidth = Math.ceil(document.querySelector('.ellipsis-reference').clientWidth / 6);

		var linesInReview = Math.floor(videoHeight / singleLineHeight) - 1;
		var charsInReview = (linesInReview * singleLineHeight * reviewWidth) / (averageCharWidth * singleLineHeight);

		document.querySelectorAll('.video-review .the-rest').forEach((review, index) => {
			if (review.innerHTML.length > charsInReview) {
				review.innerHTML = review.innerHTML.substring(0, charsInReview - 3) + '...';
			}

			document.querySelectorAll('.video-review')[index].style.visibility = 'visible';
			document.querySelectorAll('.video-review')[index].style.height = 'auto';
		});
	}
}

chopReview();

$('.header-search input').focus(function(event) {
	$('.header-search').addClass('active');
});

$('.header-search input').blur(function(event) {
	$('.header-search').removeClass('active');
});





