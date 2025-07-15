$(document).ready(function () {
	// Tab functionality
	$('.nav-tabs a').on('click', function (e) {
		e.preventDefault();
		var target = $(this).attr('href');

		$(this).closest('.nav-tabs').find('li').removeClass('active');
		$(this).parent().addClass('active');

		$('.tab-content .tab-pane').removeClass('active');
		$(target).addClass('active');
	});

	// Collapse functionality
	$('[data-toggle="collapse"]').on('click', function (e) {
		e.preventDefault();
		var target = $($(this).attr('href'));
		target.toggleClass('show');
	});

	// Carousel
	$('[data-ride="carousel"]').each(function () {
		const $carousel = $(this);
		const $items = $carousel.find('.item');
		const $indicators = $carousel.find('.carousel-indicators li');
		const interval = parseInt($carousel.data('interval')) || 5000;
		let current = $items.index($items.filter('.active'));
		let timer;

		function show(index) {
			// Update active item
			$items.removeClass('active').eq(index).addClass('active');

			// Update active indicator
			$indicators.removeClass('active').eq(index).addClass('active');

			current = index;
		}

		function next() {
			let newIndex = (current + 1) % $items.length;
			show(newIndex);
		}

		function prev() {
			let newIndex = (current - 1 + $items.length) % $items.length;
			show(newIndex);
		}

		// Controls
		$carousel.find('[data-slide="next"]').on('click', function (e) {
			e.preventDefault();
			next();
		});

		$carousel.find('[data-slide="prev"]').on('click', function (e) {
			e.preventDefault();
			prev();
		});

		// Indicators
		$indicators.each(function (index) {
			$(this).on('click', function () {
				show(index);
			});
		});

		// Auto slide
		function startAutoSlide() {
			stopAutoSlide();
			timer = setInterval(next, interval);
		}

		function stopAutoSlide() {
			clearInterval(timer);
		}

		$carousel.on('mouseenter', stopAutoSlide);
		$carousel.on('mouseleave', startAutoSlide);

		// Start rotation
		show(current); // Ensure sync on init
		startAutoSlide();
	});
});
