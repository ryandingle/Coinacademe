jQuery(function(){

	//body

	$(window).load(function(){

		//scrollbar

    	$(".article-title,.messages,.notification,.article-title").mCustomScrollbar({

		  	scrollInertia: 0,

			autoHideScrollbar: true,

			scrollButtons:{

			  enable:true

			},

			scrollInertia: 300,

	 });

	 

	 $("#content").fadeIn();

		jQuery.fn.articlelist = function(){

			this.each(function (i){

				$(this).css({"position":"relative"});

				$(this).animate({ right: -100 }, 10).animate({ right: 0 }, 500);

			});

			return this;

		}

		$("#article-list").articlelist();

		$(".sidebar-right").fadeIn(1500);

	});

	//navs

	var offset = 250;

    jQuery(window).scroll(function() {

        if (jQuery(this).scrollTop() > offset) {

            jQuery('#floating-side-nav').css(

				{'position':'fixed',

					'width':'19.7%',

					'left':'100',

					'margin-top':'-270px',

					'height':'auto',

				}

				);

				

			jQuery('.sidebar-right').css({'position':'fixed',

										'top':'13px',

										'right':'0px',

										});

			jQuery('.first-soc-show').hide();

			//jQuery('.second-soc-show').slideDown();

			

			jQuery.fn.social = function(){

				this.each(function (i){

					$(this).css({"position":"fixed","width":"150px","display":"block"});

					$(this).animate({ left: -30 }, 600);

				});

				return this;

				}

			$(".second-soc-show").social();

			

			//jQuery('.solo-sec')

					

			jQuery.fn.solo = function(){

				this.each(function (i){

					$(this).css

					({

						'position':'fixed',

						'margin-left': '560px',

						'margin-top':'-50px' 

					});

					$(this).animate({ top: 60 }, 600);

				});

				return this;

				}

			$(".solo-sec").solo();

			

			jQuery.fn.solo = function(){

				this.each(function (i){

					$(this).css

					({

						'position':'fixed',

						'margin-top':'-50px' 

					});

					$(this).animate({ top: 60 }, 600);

				});

				return this;

				}

			$(".timer").solo();

			

			jQuery('.sidebar-right').css('margin-top','-80px');

        }else if(jQuery(this).scrollTop() < offset){

			jQuery('#floating-side-nav').css('margin-top','0px');

			jQuery('.sidebar-right').css('margin-top','90px');

			jQuery('.solo-sec,.timer').css

					({

						'margin-top':'5px' 

					});

			jQuery('.first-soc-show').show();

			jQuery('.second-soc-show').hide();

        }

    });



});





jQuery(function(){		

//backto top and nav

	var offset = 110;

    var duration = 200;

    jQuery(window).scroll(function() {

        if (jQuery(this).scrollTop() > offset) {

            jQuery('.back-to-top,#floating-nav').fadeIn(duration);

			jQuery('.navigation-bar').addClass('shadow');

        } else {

			jQuery('.back-to-top,#floating-nav').fadeOut(duration);

			jQuery('.navigation-bar').removeClass('shadow');

        }

    });

    

    jQuery('.back-to-top').click(function(event) {

        event.preventDefault();

        jQuery('html, body').animate({scrollTop: 0}, duration);

        return false;

    });

});

//end



jQuery(document).ready(function() {

    var offset = 220;

    var duration = 200;

    jQuery(window).scroll(function() {

        if (jQuery(this).scrollTop() > offset) {

            jQuery('.back-to-top').fadeIn(duration);

        } else {

            jQuery('.back-to-top').fadeOut(duration);

        }

    });

    

    jQuery('.back-to-top').click(function(event) {

        event.preventDefault();

        jQuery('html, body').animate({scrollTop: 0}, duration);

        return false;

    })

});