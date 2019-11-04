
$(document).ready(function()
{
    "use strict";

	initCoursesSlider();

	function initCoursesSlider()
	{
		if($('.courses_slider').length)
		{
			var coursesSlider = $('.courses_slider');
			coursesSlider.owlCarousel(
			{
				items:3,
				loop:true,
				autoplay:true,
				autoplayTimeout:8000,
				nav:false,
				dots:false,
				smartSpeed:1200,
				margin:30,
				responsive:
				{
					0:
					{
						items:1
					},
					768:
					{
						items:2
					},
					992:
					{
						items:3
					}
				}
			});

			if($('.courses_slider_prev').length)
			{
				var prev = $('.courses_slider_prev');
				prev.on('click', function()
				{
					coursesSlider.trigger('prev.owl.carousel');
				});
			}

			if($('.courses_slider_next').length)
			{
				var next = $('.courses_slider_next');
				next.on('click', function()
				{
					coursesSlider.trigger('next.owl.carousel');
				});
			}
		}
	}
});
