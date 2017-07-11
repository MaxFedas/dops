$(function() {
	var width = $(window).width();
	var height = $(window).height();
	
	/*cases popup*/
	if(window.location.hash=='#profile'){
		$('.cases-btn').addClass('active');
		$('.cases_popup').fadeIn(500, function(){
			//case_swiper.update(true);
		});
		$('.cases_popup').addClass('open');
		$('.case_items .swiper-container').css('display', 'block');
	}
	
	/*menu icon animations*/
	var mi_1 = $('.menu_item_1 svg #lines');
	replaceWithPaths(mi_1);
	setDash(mi_1);
	
	var mi_3 = $('.menu_item_3 svg #lines');
	replaceWithPaths(mi_3);
	setDash(mi_3);
	
	var mi_3_2 = $('.menu_item_3 svg #lines2');
	replaceWithPaths(mi_3_2);
	setDash(mi_3_2);
	
	var mi_4 = $('.menu_item_4 svg #lines');
	replaceWithPaths(mi_4);
	setDash(mi_4);
	
	var mi_4_2 = $('.menu_item_4 svg #lines2');
	replaceWithPaths(mi_4_2);
	setDash(mi_4_2);
	
	var mi_5 = $('.menu_item_5 svg #arrows');
	replaceWithPaths(mi_5);
	setDash(mi_5);
	
	var mi_6_1 = $('.menu_item_6 svg #lines-1');
	replaceWithPaths(mi_6_1);
	setDash(mi_6_1);
	
	var mi_6_2 = $('.menu_item_6 svg #lines-2');
	replaceWithPaths(mi_6_2);
	setDash(mi_6_2);
	
	var mi_6_3 = $('.menu_item_6 svg #lines-3');
	replaceWithPaths(mi_6_3);
	setDash(mi_6_3);
	
	var mi_7_1 = $('.menu_item_7 svg #text1');
	replaceWithPaths(mi_7_1);
	setDash(mi_7_1);
	
	var mi_7_2 = $('.menu_item_7 svg #text2');
	replaceWithPaths(mi_7_2);
	setDash(mi_7_2);
	
	var mi_7_3 = $('.menu_item_7 svg #text3');
	replaceWithPaths(mi_7_3);
	setDash(mi_7_3);
	
	var mi_8 = $('.menu_item_8 svg #text');
	replaceWithPaths(mi_8);
	setDash(mi_8);
	
	var serv_img_1 = $('.serv_img_1 svg #lines');
	replaceWithPaths(serv_img_1);
	setDash(serv_img_1);
	
	var serv_img_2 = $('.serv_img_2 svg #lines');
	replaceWithPaths(serv_img_2);
	setDash(serv_img_2);
	
	var serv_img_3 = $('.serv_img_3 svg #lines');
	replaceWithPaths(serv_img_3);
	setDash(serv_img_3);
	
	var serv_img_4 = $('.serv_img_4 svg #lines');
	replaceWithPaths(serv_img_4);
	setDash(serv_img_4);
	
	var serv_img_5 = $('.serv_img_5 svg #lines');
	replaceWithPaths(serv_img_5);
	setDash(serv_img_5);
	
	var val_icon_2 = $('#val_icon_2 #draw-1');
	replaceWithPaths(val_icon_2);
	setDash(val_icon_2);
	
	/*
	var polyline = $('.bg svg');
	replaceWithPaths(polyline);
	setDash(polyline);
	*/
		
	/*reviews carousel*/
	rev_swiper_elem = $('.rev_carousel');
	var rev_swiper = new Swiper('.rev_carousel .swiper-container', {
		//autoplay: 3000,
		speed: 750,
		effect: 'fade',
		slidesPerView: 1,
        spaceBetween: 0,
		mousewheelControl: 0,
		nextButton: '.rev_carousel .next',
        prevButton: '.rev_carousel .prev',
		loop: true,
		simulateTouch: false,
		onSlideChangeStart(swiper) {
			 var slide_index = swiper.activeIndex;
			 var slide_count = swiper.slides.length-2;
			 if(slide_index > slide_count) {
				 slide_index = 1;
			 }
			 $('.reviews .map_item').removeClass('active');
			 $('.reviews .map_item').eq(slide_index-1).addClass('active');
			 
			 rev_swiper_elem.find('.num_curr').text(slide_index);
			 rev_swiper_elem.find('.num_total span').text(slide_count);
		}
    });
	$('.reviews .map_item').click(function(){
		var item_index = $(this).index()+1;
		rev_swiper.slideTo(item_index, 750);
	});

	$('.section.reviews').swipe({
        swipeLeft:function(event, direction, distance, duration, fingerCount, fingerData) {
			rev_swiper.slidePrev();
        },
		swipeRight:function(event, direction, distance, duration, fingerCount, fingerData) {
			rev_swiper.slideNext();
        }
    });
	
	/*industrial carousel*/
	var ind_swiper_elem = $('.ind_carousel');
	var ind_swiper = new Swiper('.ind_carousel .swiper-container', {
		//autoplay: 3000,
		speed: 300,
		effect: 'fade',
		slidesPerView: 1,
        spaceBetween: 0,
		mousewheelControl: 0,
		nextButton: '.ind_carousel .next',
        prevButton: '.ind_carousel .prev',
		loop: true,
		simulateTouch: false,
		onSlideChangeStart(swiper) {
			 var slide_index = swiper.activeIndex;
			 var slide_count = swiper.slides.length-2;
			 if(slide_index > slide_count) {
				 slide_index = 1;
			 }
			 $('.ind_items .item').removeClass('active');
			 $('.ind_items .item').eq(slide_index-1).addClass('active');
		}
    });
	$('.ind_items .item').click(function(){
		var item_index = $(this).index()+1;
		ind_swiper.slideTo(item_index, 750);
	});

	$('.section.industry').swipe({
        swipeLeft:function(event, direction, distance, duration, fingerCount, fingerData) {
			ind_swiper.slidePrev();
        },
		swipeRight:function(event, direction, distance, duration, fingerCount, fingerData) {
			ind_swiper.slideNext();
        }
    });
	
	/*service carousel*/
	var serv_swiper_elem = $('.service_carousel');
	var serv_swiper = new Swiper('.service_carousel .swiper-container', {
		//autoplay: 3000,
		speed: 750,
		effect: 'fade',
		slidesPerView: 1,
        spaceBetween: 0,
		mousewheelControl: 0,
		nextButton: '.c-next',
        prevButton: '.c-prev',
		loop: true,
		simulateTouch: false,
		onSlideChangeStart(swiper) {
			 var slide_index = swiper.activeIndex;
			 var slide_count = swiper.slides.length-2;
			 if(slide_index > slide_count) {
				 slide_index = 1;
			 }
			 $('.serv_img').removeClass('active');
			 $('.serv_img').eq(slide_index-1).addClass('active');
			 
			 $('.serv_point_i').removeClass('active');
			 $('.serv_point_i').eq(slide_index-1).addClass('active');
		}
    });
	$('.serv_point_i').click(function(){
		var item_index = $(this).index()+1;
		serv_swiper.slideTo(item_index, 750);
		$('.serv_point_i').removeClass('active');
		$(this).addClass('active');
	});

	$('.section.service').swipe({
        swipeLeft:function(event, direction, distance, duration, fingerCount, fingerData) {
			serv_swiper.slidePrev();
        },
		swipeRight:function(event, direction, distance, duration, fingerCount, fingerData) {
			serv_swiper.slideNext();
        }
    });
	
	/*values carousel*/
	val_swiper_elem = $('.values_carousel');
	var val_swiper = new Swiper('.values_carousel .swiper-container', {
		//autoplay: 3000,
		speed: 750,
		effect: 'fade',
		slidesPerView: 1,
        spaceBetween: 0,
		mousewheelControl: 0,
		nextButton: '.values_carousel .next',
        prevButton: '.values_carousel .prev',
		loop: true,
		simulateTouch: false,
		//effect: 'fade',
		onSlideChangeStart(swiper) {
			 var slide_index = swiper.activeIndex;
			 var slide_count = swiper.slides.length-2;
			 if(slide_index > slide_count) {
				 slide_index = 1;
			 }
			 $('.valic_items .item').removeClass('active');
			 $('.valic_items .item').eq(slide_index-1).addClass('active');
			 
			  val_swiper_elem.find('.nav_num span').text(slide_index);
			 val_swiper_elem.find('.num_curr').text(slide_index);
			 val_swiper_elem.find('.num_total span').text(slide_count);
		}
    });

	$('.section.values').swipe({
        swipeLeft:function(event, direction, distance, duration, fingerCount, fingerData) {
			val_swiper.slidePrev();
        },
		swipeRight:function(event, direction, distance, duration, fingerCount, fingerData) {
			val_swiper.slideNext();
        }
    });
	
	/*cases carousel*/
	case_swiper_elem = $('.case_items');
	if(case_swiper_elem.length){
		var case_count = $('.case_items .swiper-slide').length;
		var case_index = width/3*(case_count-3)/width;
		var case_swiper = new Swiper('.case_items .swiper-container', {
			speed: 1000,
			slidesPerView: 3,
			mousewheelControl: 0,
			spaceBetween: 0,
			nextButton: '.case_items .next',
			prevButton: '.case_items .prev',
			loop: false,
			simulateTouch: false,
			breakpoints: {
				740: {
				  slidesPerView: 'auto',
				  spaceBetween: 0,
				  loop: true,
				  simulateTouch: true,
				  centeredSlides: false,
				  loopedSlides: 10
				}
			},
			onSlideChangeEnd(swiper) {
				 if(!$('.case_items').hasClass('dragging')){
					 $('.scroll-btn').css('left', swiper.translate*(-1)/(case_index*2)+'px');
				 }
			},
			observer: true
		});

		$('.scroll-btn').draggable({
			start: function(event, ui) {
				$('.case_items').addClass('dragging');
			},
			stop: function(event, ui) {
				$('.case_items').removeClass('dragging');
			},
			drag: function(event, ui) {
				console.log(event);
				console.log(ui);
				$('.case_items .swiper-wrapper').attr('style', 'transform: translate3d(-'+ui.position.left*case_index+'px,0,0);');
			}
		});
	}
	
	/* validate */
	$.validator.addMethod(
		"regex",
		function(value, element, regexp) 
		{
			if (regexp.constructor != RegExp)
				regexp = new RegExp(regexp);
			else if (regexp.global)
				regexp.lastIndex = 0;
			return this.optional(element) || regexp.test(value);
		},
		"Please check your input."
    );
	$("#order-form-1").validate({
		rules: {
			skype: {
				required: true,
				regex: /^[a-z0-9_-]{3,15}$/
			},
		},
		success: "valid",
		submitHandler: function() {
			 $.ajax({
				url: '/mailer/feedback.php',
				type: 'post',
				dataType: 'json',
				data: 'skype='+ $("#order-form-1").find('input[name="skype"]').val(),
				beforeSend: function() {
				
				},
				complete: function() {
				
				},
				success: function(data) {
					$('.sectionWrap.order .rt .htitle').hide();
					$('.sectionWrap.order .rt .htitle-thanks').show();
					$('#order-form-1').fadeOut();
					setTimeout(function(){
						$('.sectionWrap.order .rt .htitle-thanks').fadeOut(500, function(){
							$('.sectionWrap.order .rt .htitle-start').show();
							$('#order-form-1').fadeIn(500);
						});
					}, 3000);
				}
			});
		}, 
        highlight: function(element) {
		},
		unhighlight: function(element) {
		}
	});
	$("#order-form-2").validate({
		rules: {
			email: {
				required: true,
				email: true
			},
		},
		success: "valid",
		submitHandler: function() {
			 $.ajax({
				url: '/mailer/feedback.php',
				type: 'post',
				dataType: 'json',
				data: 'email='+ $("#order-form-2").find('input[name="email"]').val(),
				beforeSend: function() {
				
				},
				complete: function() {
				
				},
				success: function(data) {
					$('.sectionWrap.order .rt .htitle').hide();
					$('.sectionWrap.order .rt .htitle-thanks').show();
					$('#order-form-2').fadeOut();
					setTimeout(function(){
						$('.sectionWrap.order .rt .htitle-thanks').fadeOut(500, function(){
							$('.sectionWrap.order .rt .htitle-start').show();
							$('#order-form-2').fadeIn(500);
						});
					}, 3000);
				}
			});
		}, 
        highlight: function(element) {
		},
		unhighlight: function(element) {
		}
	});
	$("#order-form-3").validate({
		rules: {
			phone: {
				required: true,
				regex: /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/
			},
		},
		success: "valid",
		submitHandler: function() {
			 $.ajax({
				url: '/mailer/feedback.php',
				type: 'post',
				dataType: 'json',
				data: 'phone='+ $("#order-form-3").find('input[name="phone"]').val(),
				beforeSend: function() {
				
				},
				complete: function() {
				
				},
				success: function(data) {
					$('.sectionWrap.order .rt .htitle').hide();
					$('.sectionWrap.order .rt .htitle-thanks').show();
					$('#order-form-3').fadeOut();
					setTimeout(function(){
						$('.sectionWrap.order .rt .htitle-thanks').fadeOut(500, function(){
							$('.sectionWrap.order .rt .htitle-start').show();
							$('#order-form-3').fadeIn(500);
						});
					}, 3000);
				}
			});
		}, 
        highlight: function(element) {
		},
		unhighlight: function(element) {
		}
	});
	$("#contact-form").validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
		},
		success: "valid",
		submitHandler: function() {
			 $.ajax({
				url: '/mailer/contact.php',
				type: 'post',
				dataType: 'json',
				data: 'name='+ $("#contact-form").find('input[name="name"]').val() + '&email='+ $("#contact-form").find('input[name="email"]').val() + '&message='+ $("#contact-form").find('input[name="message"]').val(),
				beforeSend: function() {
				
				},
				complete: function() {
				
				},
				success: function(data) {
					$('.c_info_3 .htitle').hide();
					$('.c_info_3 .htitle-thanks').show();
					$('#contact-form').fadeOut();
					setTimeout(function(){
						$('.c_info_3 .htitle-thanks').fadeOut(500, function(){
							$('.c_info_3 .htitle-start').show();
							$('#contact-form').fadeIn(500);
						});
					}, 3000);
				}
			});
		}, 
        highlight: function(element) {
		},
		unhighlight: function(element) {
		}
	});
	
	/*Phone Mask
	$('input[name="phone"]').mask("+99(999) 999-99-99");
	*/
	$('input, textarea').each(function(){
		$(this).attr('autocomplete', 'off');
	});
	
	/*fixed circle*/
	var circle_xy = $('.s-circle').height()/2;
	$('.section').mousemove(function(e){
		$('.s-circle').css({'transform': 'translate3d('+(e.pageX-circle_xy)+'px'+','+(e.pageY-circle_xy)+'px'+', 0'});
	});
	
	/*process*/
	if($('.proc_menu').length){
		var speed = 250, easing = mina.easeinout;
		var s = Snap('#graphic'), s2 = Snap('#graphic2'), path = s.select('#graph1'), path2 = s2.select('#graph2');
		var start_d = path.attr('d');
		var start_d2 = path.attr('d');
        var $label =  $(".labels > .label");

        function labelUp(){
            setTimeout(function(){
                $label.addClass("animate");
            }, 500);
        };

        function label_h(leftPos, height){
            if (height === undefined) height = 250
            
            setTimeout(function(){
                $label.css({ 
                    "left": leftPos + "%",
                    "height": height
                });
            }, 400)    
        }
        
        label_h(48);
        labelUp();
		
		$('.proc_menu a').click(function(){
			$('.proc_menu a').removeClass('active');
			$(this).addClass('active');
			proc_tab = $(this).attr('href');
			$('.proc_tab').removeClass('active');
			$(proc_tab).addClass('active');
			
			var cur1 = $("#graph1").attr("d");
            var cur2 = $("#graph2").attr("d");


			/*animate graphic 1*/
			newdg1 = $(this).attr('data-graph1');
			if(newdg1!='' && newdg1!=undefined){

				pathConfig = {
					//from : cur1,
					to : newdg1
				};
				path.animate({d: newdg1}, 1000, easing);
			}
			
			/*animate graphic 2*/
			newdg2 = $(this).attr('data-graph2');
			if(newdg2!='' && newdg2!=undefined){

				pathConfig = {
					//from : cur2,
					to : newdg2
				};
				path2.animate({d: newdg2}, 1000, easing);
			}
			
            /*Label*/
            $label.removeClass("animate");
            labelUp();

            var href = $(this).attr("href");
            switch (href){
                case "#proc-tab-2":
                    label_h(50);
                break;    

                case "#proc-tab-3":
                    label_h(49.5, 320);
                break;   

                case "#proc-tab-4":
                    label_h(54, 320);
                break; 

                case "#proc-tab-5":
                    label_h(50);
                break; 

                case "#proc-tab-6":
                    label_h(49);
                break; 

                case "#proc-tab-7":
                    label_h(52, 230);
                break; 

                case "#proc-tab-8":
                    label_h(50, 290);
                break; 

                default:
                    label_h(48);
                break;    
            };
			
			/*progress*/
			var progress = 0;
			for(i=0; i<=$(this).index(); i++){
				progress+=parseInt($('.proc_menu a').eq(i).attr('data-time'));
			}
			$('.proc_line .label').text(progress);
			$('.proc_line .f-line').css({'width': progress+'%'});
			$('.proc_line .f-line .current').text(progress+'%');
			$('.graphic .label-1 span').text($(this).attr('data-time')+'%');
			$('.graphic .label-2 span').text($(this).attr('data-spec'));
			return false;
		});

		$('.section.process .lt .prev').click(function(){
			if($('.proc_menu a.active').prev().length){
				$('.proc_menu a.active').prev().click();
			} else {
				$('.proc_menu a:last').click();
			}
			return false;
		});
		$('.section.process .lt .next').click(function(){
			if($('.proc_menu a.active').next().length){
				$('.proc_menu a.active').next().click();
			} else {
				$('.proc_menu a:first').click();
			}
			return false;
		});
		$('.section.process').swipe({
			swipeLeft:function(event, direction, distance, duration, fingerCount, fingerData) {
				if($('.proc_tabs a.active').prev().length){
					$('.proc_tabs a.active').prev().click();
				} else {
					$('.proc_tabs a:last').click();
				}
			},
			swipeRight:function(event, direction, distance, duration, fingerCount, fingerData) {
				if($('.proc_tabs a.active').next().length){
					$('.proc_tabs a.active').next().click();
				} else {
					$('.proc_tabs a:first').click();
				}
			}
		});
	}
	
	/*order*/
	$('.c_form input, .c_form textarea').focusin(function(){
		$(this).parent().addClass('active');
	});
	$('.c_form input, .c_form textarea').focusout(function(){
		if($(this).val()==''){
			$(this).parent().removeClass('active');
		}
	});
	
	$('.order_types a').click(function(){
		$('.order_types a').removeClass('active');
		$(this).addClass('active');
		order_tab = $(this).attr('href');
		$('.order_tab').removeClass('active');
		$(order_tab).addClass('active');
		return false;
	});
	
	/*bg*/	
	toggleBg();
	function toggleBg(){
		$('.bg svg g').attr('class', '');
		setTimeout(function(){
			$('.bg svg g').attr('class', '');
			$('.bg svg #polyline-1').attr('class', 'run');
		}, 0);
		
		setTimeout(function(){
			$('.bg svg #polyline-1').attr('class', 'run active');
		}, 3250);
		setTimeout(function(){
			$('.bg svg g').attr('class', '');
			$('.bg svg #polyline-2').attr('class', 'run');
		}, 4000);
		
		setTimeout(function(){
			$('.bg svg #polyline-2').attr('class', 'run active');
		}, 6750);
		setTimeout(function(){
			$('.bg svg g').attr('class', '');
			$('.bg svg #polyline-3').attr('class', 'run');
		}, 7500);
		
		setTimeout(function(){
			$('.bg svg #polyline-3').attr('class', 'run active');
		}, 10750);
		setTimeout(function(){
			$('.bg svg g').attr('class', '');
			$('.bg svg #polyline-4').attr('class', 'run');
		}, 11500);
		
		setTimeout(function(){
			$('.bg svg #polyline-4').attr('class', 'run active');
		}, 15750);
	}
	setInterval(toggleBg, 16500);
	
	/*glitch*/	
	toggleSwitch();
	function toggleSwitch(){
		$('.screen').removeClass('glitch');
		$('.screen').removeClass('glitch2');
		setTimeout(function(){
			$('.screen').addClass('glitch');
		}, 2000);
		setTimeout(function(){
			$('.screen').removeClass('glitch');
		}, 3000);
		setTimeout(function(){
			$('.screen').addClass('glitch');
			$('.screen').addClass('glitch2');
		}, 4000);
		if(width>740){	
			setTimeout(function(){
				glitch_txt = $('.screen-2 span').text();
				if(glitch_txt=='DIGITAL'){
					$('.screen-2 span').text('CREATIVE');
					$('.screen-2 span').attr('data-text', 'CREATIVE');
				}
				else if(glitch_txt=='CREATIVE'){
					$('.screen-2 span').text('INVENTIVE');
					$('.screen-2 span').attr('data-text', 'INVENTIVE');
				}
				else if(glitch_txt=='INVENTIVE'){
					$('.screen-2 span').text('DIGITAL');
					$('.screen-2 span').attr('data-text', 'DIGITAL');
				}
			}, 5100);
		}
	}
	setInterval(toggleSwitch, 7000);
	
	/*service pulse*/
	if($('.serv_point_i').length){
		toggleServicePulse();
		function toggleServicePulse(){
			$('.serv_point_i').removeClass('hovered');
			$('.serv_point_i').not('.active').random().addClass('hovered');
			setTimeout(function(){
				$('.serv_point_i').removeClass('hovered');
			}, 1000);
		}
		setInterval(toggleServicePulse, 2000);
	}
	
	/*industry pulse*/
	if($('.ind_items').length){
		toggleIndPulse();
		function toggleIndPulse(){
			current = $('.ind_items .item.hovered');
			$('.ind_items .item').removeClass('hovered');
			if(current.next().length){
				current.next().addClass('hovered');
			} else {
				$('.ind_items .item:first').addClass('hovered');
			}
		}
		setInterval(toggleIndPulse, 1500);
	}
	
	/*reviews pulse*/
	if($('.map_items').length){
		toggleMapPulse();
		function toggleMapPulse(){
			current = $('.map_item.hovered');
			$('.map_item').removeClass('hovered');
			if(current.next().length){
				current.next().addClass('hovered');
			} else {
				$('.map_item:first').addClass('hovered');
			}
		}
		setInterval(toggleMapPulse, 1000);
	}

	/* handle lang switch by user */
	$('.lang').find('a').on('click', function(e){
		var date = new Date();
		date.setHours(date.getHours() + 1);
		var loc = 'ukr';
		if ($(this).text() == 'укр') {
			loc = 'ukr';
		} else if ($(this).text() == 'рус') {
			loc = 'rus';
		} else {
			loc = '';
		}
		document.cookie = "userSelectedLocal="+loc+"; expires=" + date.toUTCString() + "; path=/";
	});

	/* Call Back Form*/
	(function(){
		var $input = document.querySelectorAll(".order_tab input");

		$input.forEach(function(item){
			item.addEventListener("blur", function(){
				var $button = this.parentNode.parentNode.querySelector(".bts");

				console.log($button);
				(item.value) ? $button.classList.add("focus") : $button.classList.remove("focus")
				
			});
		});
	}());
	
	/* safety of content */
	$(document).on('keydown', function(e) {
		if((navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey) && (e.which == 83)) {
			e.preventDefault();
			return false;
		}
    });
	$('body').on('contextmenu', function(e){return false;});
	$('body').bind('copy paste',function(e){
	    e.preventDefault(); return false; 
	});
});

$.fn.random = function() {
    var randomIndex = Math.floor(Math.random() * this.length);  
    return $(this[randomIndex]);
};