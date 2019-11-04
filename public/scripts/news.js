
$(document).ready(function()
{
	"use strict";

	initCoursesSlider();
	initMilestones();

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

	/*

	7. Initialize Milestones

	*/

	function initMilestones()
	{
		if($('.milestone_counter').length)
		{
			var milestoneItems = $('.milestone_counter');

	    	milestoneItems.each(function(i)
	    	{
	    		var ele = $(this);
	    		var endValue = ele.data('end-value');
	    		var eleValue = ele.text();

	    		/* Use data-sign-before and data-sign-after to add signs
	    		infront or behind the counter number (+, k, etc) */
	    		var signBefore = "";
	    		var signAfter = "";

	    		if(ele.attr('data-sign-before'))
	    		{
	    			signBefore = ele.attr('data-sign-before');
	    		}

	    		if(ele.attr('data-sign-after'))
	    		{
	    			signAfter = ele.attr('data-sign-after');
	    		}

	    		var milestoneScene = new ScrollMagic.Scene({
		    		triggerElement: this,
		    		triggerHook: 'onEnter',
		    		reverse:false
		    	})
		    	.on('start', function()
		    	{
		    		var counter = {value:eleValue};
		    		var counterTween = TweenMax.to(counter, 4,
		    		{
		    			value: endValue,
		    			roundProps:"value",
						ease: Circ.easeOut,
						onUpdate:function()
						{
							document.getElementsByClassName('milestone_counter')[i].innerHTML = signBefore + counter.value + signAfter;
						}
		    		});
		    	})
			    .addTo(ctrl);
	    	});
		}
	}

});
