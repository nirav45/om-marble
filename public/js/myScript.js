
		$(document).ready(function(){

			setTimeout(function(){
				$('.preloader-bg').fadeOut("slow");
				$('.loader-new').fadeOut("slow");
			},2000);

			jQuery.validator.addMethod("noSpace", function(value, element) { 
				return value.indexOf(" ") < 0 && value != ""; 
			}, "This field is requireed");

			$(".products-carousel").owlCarousel({
				margin:10,
				autoplay:true,
				responsiveClass:true,
				lazyLoad:true,
				autoplayHoverPause:true,
				autoplayTimeout:3000,
				responsive:{
					0:{
						items:1,
					},
					480:{
						items:3,
					},
					768:{
						items:4,
					}
				},
			});

			$(".banner-carousel").owlCarousel({
				margin:10,
				autoplay:true,
				responsiveClass:true,
				lazyLoad:true,
				dots:false,
				loop:true,
				autoplayTimeout:3000,
				responsive:{
					0:{
						items:1,
					},
					480:{
						items:1,
					},
					768:{
						items:1,
					}
				},
			});

			$('.testimonialOwl').owlCarousel({
			    loop:true,
			    margin:10,
			    nav:false,
			  	dots: false,
			  	autoplay:true,
			  	autoplayTimeout:3000,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:1
			        },
			        1000:{
			            items:2
			        }
			    }
			});

			$('.navbar-nav>li>a').click(function(){
		        $('.navbar-nav>li>a').removeClass('active');
		        $(this).addClass('active');
		    });

		    $(window).scroll(function(){
		        if ($(this).scrollTop() > 100) {
		            $('#scroll').fadeIn();
		        } else {
		            $('#scroll').fadeOut();
		        }
		    });
		    $('#scroll').click(function(){
		        $("html, body").animate({ scrollTop: 0 }, 600);
		        return false;
		    });

		});

		$('.navbar-nav>li>a').on('click', function(){
		    $('.navbar-collapse').collapse('hide');
		});

		function clickSmoothScroll(i){

			$([document.documentElement, document.body]).animate({
				scrollTop: $("#"+i+"").offset().top-90
			}, 1000);
		}
