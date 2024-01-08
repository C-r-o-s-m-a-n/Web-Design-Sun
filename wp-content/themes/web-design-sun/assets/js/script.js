jQuery(document).ready(function($){
	/*loadSvg*/
	let loadSVG = () =>{
		$('[data-svg]').each(function () {
			let $this = $(this),
				$svg = $this.data('svg'),
				$filename = $svg.split('\\').pop().split('/').pop().replace(".svg", "");

			if ($svg){
				$.ajax({
					url: $svg,
					type: 'HEAD',
					success: function () {
						$this.load($svg, function (responseTxt, statusTxt) {
							if (statusTxt === "success") {
								$this.find('svg').addClass('svg svg-' + $filename + '');
							}
						});
					},
					error: function () {
						console.log('Файл не існує: ' + $svg);
					}
				});
			}
		});
	}

	loadSVG()
	
	/*open search form*/
	$('.header-search').on('click', function () {
		$('.header-to-skip-for-search__to-hide').toggleClass('header-to-skip-for-search__to-hide--skip')
		$('.header-search-form').toggleClass('header-search-form--show')
		$('.header').css({'overflow':'hidden'})
	})

	$('.header-search-form span').on('click', function () {
		$('.header-to-skip-for-search__to-hide').removeClass('header-to-skip-for-search__to-hide--skip')
		$('.header-search-form').removeClass('header-search-form--show')
		$('.header').css({'overflow':'visible'})
	})


	/*Sliders*/
	$('.featured-product-row .featured-product-slider').slick({
		slidesToShow: 3,
		infinite: false,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2
				}
			}
		]
	})

	$('.front-page-blog-slider').slick({
		slidesToShow: 3,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2
				}
			}
		]
	})
});