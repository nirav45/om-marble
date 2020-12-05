		AOS.init();
		new WOW().init();

		$(document).ready(function(){

			setTimeout(function(){
				$('.preloader-bg').fadeOut("slow");
				$('.loader-new').fadeOut("slow");
			},2000);

			
		});