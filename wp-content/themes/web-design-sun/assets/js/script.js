$(document).ready(function(){
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


			/*$this.load($svg, function (responseTxt, statusTxt) {
				if (statusTxt === "success") {
					$this.find('svg').addClass('svg svg-' + $filename + '');
				}
			});*/
		});
	}

	loadSVG()


	/*Sliders*/
	$('.featured-product-row .featured-product-slider').slick({
		slidesToShow: 3,
		/*responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					dots: true,
					variableWidth: true
				}
			}
		]*/
	})

	$('.front-page-blog-slider').slick({
		slidesToShow: 3
	})
});