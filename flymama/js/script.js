var meta = document.createElement('meta');
meta.name = "viewport";
if(screen.width>=720){
	meta.content = "width=1200";
} else {
	meta.content = "width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes";
}
document.getElementsByTagName('head')[0].appendChild(meta);

$(function() {
	var width = $(window).width();
	var height = $(window).height();
	
	/*Search Panel*/
	$('.search-btn').click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('.search-panel').removeClass('open');
			clearTimeout(spt);
		} else {
			$(this).addClass('active');
			$('.search-panel').removeClass('active');
			$('.search-panel').addClass('open');
			spt = setTimeout(function(){
				if(!$('.search-panel').hasClass('active')){
					 $('.search-panel').removeClass('open');
					 $('.search-btn').removeClass('active');
				}
			}, 10000);
		}
		return false;
	});
	$('.search-panel input').focusin(function(){
		$('.search-panel').addClass('active');
	});
	$('.search-overlay').click(function(){
		$('.search-btn').click();
	});
	
	/*main carousel*/
	
	var main_swiper = new Swiper('.started-slider .swiper-container', {
		autoplay: 7000,
		speed: 2000,
		slidesPerView: 1,
        spaceBetween: 0,
		loop: true,
		effect: 'fade',
		prevButton: '.started-slider .prev',
		nextButton: '.started-slider .next',
    });
	
	/*post carousel*/
	
	var post_swiper = new Swiper('.post_carousel .swiper-container', {
		slidesPerView: 1,
        spaceBetween: 0,
		loop: true,
		prevButton: '.post_carousel .prev',
		nextButton: '.post_carousel .next',
    });
	
	/*post sub carousel*/
	
	var sub_swiper = new Swiper('.sub_carousel .swiper-container', {
		slidesPerView: 1,
        spaceBetween: 0,
		pagination: '.sub_carousel .pagination',
		paginationClickable: true,
		autoplay: 5000,
    });
	
	/*post subj carousel*/
	
	var subj_swiper = new Swiper('.subj_carousel .swiper-container', {
		slidesPerView: 2,
		slidesPerGroup: 2,
        spaceBetween: 19,
		pagination: '.subj_carousel .pagination',
		paginationClickable: true,
		autoplay: 5000,
    });
	
	/*rev carousel*/
	if($('.rev_carousel_1').length){
		var rev_swiper = new Swiper('.rev_carousel_1 .swiper-container', {
			autoplay: 4000,
			slidesPerView: 1,
			spaceBetween: 0,
			prevButton: '.rev_carousel_1 .prev',
			nextButton: '.rev_carousel_1 .next',
			loop: true,
			onSlideChangeStart(swiper) {
				 var slide_index = swiper.realIndex+1;
				 var slide_count = swiper.slides.length-2;
				 $('.rev_tab').removeClass('active');
				 $('#rev-tab-'+slide_index).addClass('active');
				 
				 $('.rev_carousel_1 .pages .current').text(slide_index);
				 $('.rev_carousel_1 .pages .total').text(slide_count);
			}
		});
		rev_swiper.stopAutoplay();
		rev_swiper_play = 0;
		$(window).scroll(function(){
			if($(this).scrollTop()>$('.rev_carousel_1').offset().top && !rev_swiper_play){
				rev_swiper_play = 1;
				rev_swiper.startAutoplay();
			}
		});
		/*
		$(".rev_box").hover(function(){
			 rev_swiper.stopAutoplay();
		}, function(){
			 rev_swiper.startAutoplay();
		});
		*/
	}
	
	/*about carousel*/
	
	var about_swiper = new Swiper('.about_carousel_1 .swiper-container', {
		autoplay: 4000,
		slidesPerView: 1,
        spaceBetween: 0,
		prevButton: '.about_carousel_1 .prev',
		nextButton: '.about_carousel_1 .next',
		loop: true,
		onSlideChangeStart(swiper) {
			 var slide_index = swiper.realIndex+1;
			 var slide_count = swiper.slides.length-2;
			 
			 $('.about_carousel_1 .pages .current').text(slide_index);
			 $('.about_carousel_1 .pages .total').text(slide_count);
		}
    });
	
	/*books carousel*/
	
	var books1_swiper = new Swiper('.books_carousel_1 .swiper-container', {
		slidesPerView: 1,
        spaceBetween: 0,
		loop: true,
		prevButton: '.books_carousel_1 .prev',
		nextButton: '.books_carousel_1 .next',
		onSlideChangeStart(swiper) {
			 var slide_index = swiper.realIndex+1;
			 var slide_count = swiper.slides.length-2;
			 $('.books_carousel_1').closest('.item').find('.tab').removeClass('active');
			 $('.books_carousel_1').closest('.item').find('.tab').eq(slide_index-1).addClass('active');
			 
			 $('.books_carousel_1 .pages .current').text(slide_index);
			 $('.books_carousel_1 .pages .total').text(slide_count);
		}
    });
	
	var books2_swiper = new Swiper('.books_carousel_2 .swiper-container', {
		slidesPerView: 1,
        spaceBetween: 0,
		loop: true,
		prevButton: '.books_carousel_2 .prev',
		nextButton: '.books_carousel_2 .next',
		onSlideChangeStart(swiper) {
			 var slide_index = swiper.realIndex+1;
			 var slide_count = swiper.slides.length-2;
			 $('.books_carousel_2').closest('.item').find('.tab').removeClass('active');
			 $('.books_carousel_2').closest('.item').find('.tab').eq(slide_index-1).addClass('active');
			 
			 $('.books_carousel_2 .pages .current').text(slide_index);
			 $('.books_carousel_2 .pages .total').text(slide_count);
		}
    });
	
	/*book popup carousel*/
	
	var bookp_swiper = new Swiper('.book_carousel .swiper-container', {
		slidesPerView: 1,
        spaceBetween: 0,
		loop: true,
		prevButton: '.book_carousel .prev',
		nextButton: '.book_carousel .next',
    });
	
	/*
	setTimeout(function(){
		$('.preloader .icon').fadeOut(1000, function(){
			$('.preloader').fadeOut(1000, function(){
				
			});
		});
	}, 1000);
	*/
	
	/*menu popup*/
	$('.menu-btn').click(function(){
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('#popup_menu').animate({'right': '-400px'}, 300, function(){
				$('#overlay_menu').fadeOut(0, function(){
					$('body').removeClass('popup_open');
				});
				$('#popup_menu').removeClass('open');
			});
		} else {
			$(this).addClass('active');
			$('body').addClass('popup_open');
			$('#overlay_menu').fadeIn(0, function(){
				$('#popup_menu').animate({'right': '0px'}, 300);
				$('#popup_menu').addClass('open');
			});
		}
		return false;
	});
	$('#overlay_menu, #popup_menu .close').click(function(){
		$('.menu-btn').removeClass('active');
		$('#popup_menu').animate({'right': '-400px'}, 300, function(){
			$('#overlay_menu').fadeOut(0, function(){
				$('body').removeClass('popup_open');
			});
			$('#popup_menu').removeClass('open');
		});
	});
	
	/*ask popup*/
	$('.ask_btn').click(function(){
		$('body').addClass('popup_open');
		$('#overlay_ask').fadeIn(0, function(){
			$('#popup_ask').animate({'right': '0px'}, 300);
			$('#popup_ask').addClass('open');
		});
		
		/*hide book popup*/
		$('#popup_book').animate({'top': '-2000px'}, 300, function(){
			$('#overlay_book').fadeOut(0, function(){
				$('body').removeClass('popup_open');
			});
			$('#popup_book').removeClass('open');
		});
		
		return false;
	});
	$('#overlay_ask, #popup_ask .close').click(function(){
		$('#popup_ask').animate({'right': '-700px'}, 300, function(){
			$('#overlay_ask').fadeOut(0, function(){
				$('body').removeClass('popup_open');
			});
			$('#popup_ask').removeClass('open');
		});
	});
	
	/*consult popup*/
	$('.consult_btn').click(function(){
		$('body').addClass('popup_open');
		$('#overlay_consult').fadeIn(0, function(){
			$('#popup_consult').animate({'top': $(window).scrollTop()+50+'px'}, 300);
			$('#popup_consult').addClass('open');
		});
		
		return false;
	});
	$('#overlay_consult, #popup_consult .close').click(function(){
		$('#popup_consult').animate({'top': '-2000px'}, 300, function(){
			$('#overlay_consult').fadeOut(0, function(){
				$('body').removeClass('popup_open');
			});
			$('#popup_consult').removeClass('open');
		});
	});
	
	/*reviews popup*/
	$('.rev_btn').click(function(){
		$('body').addClass('popup_open');
		$('#overlay_rev').fadeIn(0, function(){
			$('#popup_rev').animate({'top': $(window).scrollTop()+30+'px'}, 300);
			$('#popup_rev').addClass('open');
		});
		
		return false;
	});
	$('#overlay_rev, #popup_rev .close').click(function(){
		$('#popup_rev').animate({'top': '-2000px'}, 300, function(){
			$('#overlay_rev').fadeOut(0, function(){
				$('body').removeClass('popup_open');
			});
			$('#popup_rev').removeClass('open');
		});
	});
	
	/*book popup*/
	$('.books-item .bts-readmore a').click(function(){
		$('body').addClass('popup_open');
		$('#overlay_book').fadeIn(0, function(){
			$('#popup_book').animate({'top': $(window).scrollTop()+10+'px'}, 300);
			$('#popup_book').addClass('open');
		});
		
		return false;
	});
	$('#overlay_book, #popup_book .close').click(function(){
		$('#popup_book').animate({'top': '-2000px'}, 300, function(){
			$('#overlay_book').fadeOut(0, function(){
				$('body').removeClass('popup_open');
			});
			$('#popup_book').removeClass('open');
		});
	});
	
	/*ask validate*/
	$("#askForm").validate({
		highlight: function(element) {
			$(element).parent().addClass("error");
		},
		unhighlight: function(element) {
			$(element).parent().removeClass("error");
		},
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			}
		},
		success: "valid",
		submitHandler: function() {
			$("#askForm .c_form").fadeOut();
			$("#askForm .c_thanks").fadeIn();
			
			setTimeout(function(){
				$('#askForm input, #askForm textarea').val('');
				$('#popup_ask .close').click();
				$('#askForm .c_form').fadeIn();
				$('#askForm .c_thanks').fadeOut();
			}, 4000);
		}
	});
	
	/*consult validate*/
	$("#consultForm").validate({
		highlight: function(element) {
			$(element).parent().addClass("error");
		},
		unhighlight: function(element) {
			$(element).parent().removeClass("error");
		},
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			}
		},
		success: "valid",
		submitHandler: function() {
			$("#consultForm .c_form").fadeOut();
			$("#consultForm .c_thanks").fadeIn();
			
			setTimeout(function(){
				$('#consultForm input, #consultForm textarea').val('');
				$('#popup_consult .close').click();
				$('#consultForm .c_form').fadeIn();
				$('#consultForm .c_thanks').fadeOut();
			}, 4000);
		}
	});
	
	/*reviews validate*/
	$("#revForm").validate({
		highlight: function(element) {
			$(element).parent().addClass("error");
		},
		unhighlight: function(element) {
			$(element).parent().removeClass("error");
		},
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			}
		},
		success: "valid",
		submitHandler: function() {
			$("#revForm .c_form").fadeOut();
			$("#revForm .c_thanks").fadeIn();
			
			setTimeout(function(){
				$('#revForm input, #revForm textarea').val('');
				$('#popup_consult .close').click();
				$('#revForm .c_form').fadeIn();
				$('#revForm .c_thanks').fadeOut();
			}, 4000);
		}
	});
	
	/*gift validate*/
	$("#giftForm").validate({
		highlight: function(element) {
			$(element).parent().addClass("error");
		},
		unhighlight: function(element) {
			$(element).parent().removeClass("error");
		},
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			}
		},
		success: "valid",
		submitHandler: function() {
			
		}
	});
	
	/*menu fixed*/
	if($(window).scrollTop()>100){
		$('header').addClass('fixed');
	} else {
		$('header').removeClass('fixed');
	}
	$(window).scroll(function(){
		if($(window).scrollTop()>100){
			$('header').addClass('fixed');
		} else {
			$('header').removeClass('fixed');
		}
	});
	
	/* Gallery */
	$('.gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		callbacks: {
			buildControls: function() {
			  // re-appends controls inside the main container
			  this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
			}
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
	});
	
	/*scrolltop*/
	$('.scrolltop').click(function(){
		$('html, body').animate({scrollTop: 0}, 500);
		return false;
	});
	if(width>1300){
		$(window).scroll(function(){
			if($(window).scrollTop()>100){
				$('.scrolltop').fadeIn(500);
			} else {
				$('.scrolltop').fadeOut(500);
			}
		});
	}
	
	/*blog scrolltop right panel*/
	$('.rt_column .arr_top').click(function(){
		$('html, body').animate({scrollTop: 0}, 500);
		return false;
	});
	
	/* Phone Mask */
	$('input[name="phone"]').mask("+99(999) 999-99-99");
	
	$('input, textarea').each(function(){
		$(this).attr('autocomplete', 'off');
	});
	
	/*Styled Form Elements*/
	$('input.nice, select').styler();
	
	/*Gift Popup*/
	if(!$.cookie('gift')=='1'){
		$.cookie('gift', '1', {expires: 7, path: '/' });
		
		$('body').addClass('popup_open');
		$('#overlay_gift').fadeIn(0, function(){
			$('#popup_gift').animate({'top': '50%'}, 300);
			$('#popup_gift').addClass('open');
		});
	}
	$('#overlay_gift, #popup_gift .close').click(function(){
		$('#popup_gift').animate({'top': '-2000px'}, 300, function(){
			$('#overlay_gift').fadeOut(0, function(){
				$('body').removeClass('popup_open');
			});
			$('#popup_gift').removeClass('open');
		});
	});
	
	/*Sticky Panel*/
	if(width>1199){
		$(".post-left").stick_in_parent();
		$(".blog .rt_column").stick_in_parent();
	}
});