$(function() {

	// safety of content
	$(document).on('keydown', function(e) {
      if((navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey) && (e.which == 83)) {
        e.preventDefault();
        return false;
      }
    });
	$('body').on('contextmenu', function(e){ return false; });
	$('body').bind('copy paste',function(e) {
	    e.preventDefault(); return false; 
	});

	
	var width = $(window).width();
	var height = $(window).height();
	
	/*mobile b-nav*/
	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};
	if(isMobile.any()){
		$('.b-nav').addClass('b-nav-mobile');
	}
	
	/*fullpage*/
	$('.section.centrize').height(height);
	
	$(window).load(function() {
		$('.preloader').fadeOut(1000, function(){
			wow = new WOW(
				{
					boxClass:     'wow',
					animateClass: 'animated',
					offset:       0,
					mobile:       true,
					live:         true,
					callback:     function(box) {
						if(box.id == 'graph-1'){
							$('#graph-1').addClass('active');
						}
						if(box.id == 'graph-bars'){
							$('#graph-bars').addClass('active')
						}
						if(box.id == 'profile-1'){
							$('#profile1-text-typed').typetype(
							  'Нам важно получить удобный,\n\n изысканный и современный сайт.\n\n Который будет привлекать внимание\n\n и будет понятен целевой аудитории.',
							  {
								e: 0,
								t: 50,
								keypress: function (){
								  
								},
								callback: function (){
									$('#profile-1 .typing-cursor').hide();
								}
							  }
							);
						}
						if(box.id == 'profile-2'){
							$('#profile2-text-typed').typetype(
							  'Мы приняли совмесное решение \n\n акцентировать внимание на услугах, \n\n которые больше всего важны как для \n\n компании так и ее потребителя',
							  {
								e: 0,
								t: 50,
								keypress: function (){
								  
								},
								callback: function (){
									$('#profile-2 .typing-cursor').hide();
								}
							  }
							);
						}
						if(box.id == 'profile-3'){
							$('#profile3-text-typed').typetype(
							  'Выглядит убедительно, но мы должны \n\n позаботиться также и о пользователе \n\n который не готов заказывать услугу \n\n прямо сейчас, но все же желает учиться.',
							  {
								e: 0,
								t: 50,
								keypress: function (){
									
								},
								callback: function (){
									$('#profile-3 .typing-cursor').hide();
								}
							  }
							);
						}
						if(box.id == 'profile-4'){							
							$('#profile4-text-typed').typetype(
							  'Выглядит эффектно, но мы должны \n\n позаботиться и о пользователе \n\n который не готов заказывать \n\n услугу прямо сейчас.',
							  {
								e: 0,
								t: 50,
								keypress: function (){
								  
								},
								callback: function (){
									$('#profile-4 .typing-cursor').hide();
								}
							  }
							);
						}
						if(box.id == 'color-1'){
							setTimeout(function(){
								$('#color1-text-typed').typetype(
								  '#00baff',
								  {
									e: 0,
									t: 50,
									keypress: function (){
									  
									},
									callback: function (){
										$('.color1 .typing-cursor').hide();
									}
								  }
								);
							}, 1000);
						}
						if(box.id == 'color-2'){
							setTimeout(function(){
								$('#color2-text-typed').typetype(
								  '#364450',
								  {
									e: 0,
									t: 50,
									keypress: function (){
									  
									},
									callback: function (){
										$('.color2 .typing-cursor').hide();
									}
								  }
								);
							}, 2000);
						}
						if(box.id == 'color-3'){
							setTimeout(function(){
								$('#color3-text-typed').typetype(
								  '#858e97',
								  {
									e: 0,
									t: 50,
									keypress: function (){
									  
									},
									callback: function (){
										$('.color3 .typing-cursor').hide();
									}
								  }
								);
							}, 3000);
						}
					}
				}
			)
			wow.init();
		});
	});
	
	$('.menu').on('click', 'a', function(){
		var link = $(this).attr('href');
		setTimeout(function() {
			 location.href = "" + link;
		}, 1000);
		$('.preloader').fadeIn(1000);
		return false;
	 });
	
	/*menu popup*/
	$('.menu-btn').click(function(){
		if($(this).hasClass('active')) {
			$('.menu_popup').fadeOut(500);
			$(this).removeClass('active');
			
			if(width<740){
				/*close form*/
				$('.contact_popup').fadeOut();
				$('.close-btn').fadeOut();
			}
		} else {
			$('.menu_popup').fadeIn(500);
			$(this).addClass('active');
		}
		return false;
	});
	$('.menu a').hover(function(){
		$('.menu_item').removeClass('active');
		$($(this).attr('data-id')).addClass('active');
		return false;
	});
	
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
	
	var mi_6 = $('.menu_item_6 svg #face');
	replaceWithPaths(mi_6);
	setDash(mi_6);
	
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
	
	/*Typing*/
	setInterval ('cursorAnimation()', 600);
	
	/*Font Change*/
	setInterval(function(){
		current = $('.font span.active');
		if(current.next().length){
			$('.font span').removeClass('active');
			current.next().addClass('active');
		} else {
			$('.font span').removeClass('active');
			$('.font span:first').addClass('active');
		}
	}, 3000);
	
	/*graphic tooltips*/
	$('.graph1 .point').hover(
		function(){
			$('.graph1-tooltip').css('top', $(this).offset().top-$('.graph1').offset().top-40+'px');
			$('.graph1-tooltip').css('left', $(this).offset().left-$('.graph1').offset().left-23+'px');
			$('.graph1-tooltip').addClass('active');
			$('.graph1-tooltip').text($(this).data('text'));
		},
		function(){
			$('.graph1-tooltip').removeClass('active');
		}
	);
	
	/*white tabs*/
	$('.white-menu a').click(function(){
		$('.white-menu a').addClass('black');
		$(this).removeClass('black');
		tab = $(this).attr('href');
		$('.white-tab').removeClass('active');
		$(tab).addClass('active');				$(tab).find('.ititle').removeClass('animated');				$(tab).find('.ititle').addClass('animated');
		return false;
	});
});

/*Typing Func*/
function type(elem) {
    captionLength = 0;
	caption = $(elem).find('.typing-text').html();
	captionEl = $(elem).find('.typing-res');
	typing();
}
function typing(){
	captionEl.html(caption.substr(0, captionLength++));
    if(captionLength < caption.length+1) {
        setTimeout('typing()', 25);
    } else {
        captionLength = 0;
        caption = '';
    }
}
function cursorAnimation() {
    $('.typing-cursor').animate({
        opacity: 0
    }, 'fast', 'swing').animate({
        opacity: 1
    }, 'fast', 'swing');
}