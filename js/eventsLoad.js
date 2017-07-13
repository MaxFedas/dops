$(function() {
	
	var isTouch = false;
	if ("ontouchstart" in window || navigator.msMaxTouchPoints){
        isTouch = true;
    } else {
        isTouch = false;
    }
	
	$(window).on('load', function() {
		$('.preloader').fadeOut(1000, function(){
			/*active proces icon*/
			$('#proc-tab-1').addClass('active');
		});
	});
	
	$('.logo a, .case_item a').click(function(){
		if(!$(this).parent().hasClass('disabled')){
			var link = $(this).attr('href');
			if ($(this).hasClass('work-link')) {
				location.href = "" + link;
			} else {
				setTimeout(function() {
					location.href = "" + link;
				}, 1000);
				$('.preloader').fadeIn(1000);
			}
		}
		return false;
	});


	$('body').on('mousewheel', function(e, delta) {
		if (!$('#fullpage').data().pageLoad) return;
		if (delta === 1) {
			$.fn.fullpage.moveSectionUp();
		} else {
			$.fn.fullpage.moveSectionDown();
		}
		$('#fullpage').data().pageLoad = false;
	});


	var lastY;
	var lastX;
	var currentX;
	var currentY;
	$('body').on('touchstart', function(e) {
		currentX = lastX = e.originalEvent.touches[0].clientX;
		currentY = lastY = e.originalEvent.touches[0].clientY;
	});


	$('body').on('touchmove', function(e) {
		currentX =  e.originalEvent.touches[0].clientX;
		currentY =  e.originalEvent.touches[0].clientY;
	});


$('body').on('touchend', function(e) {
	var diffX = lastX - currentX;
	var diffY = lastY - currentY;
	if (Math.abs(diffX) > Math.abs(diffY) || Math.abs(diffY) < 100) {
		return;
	}
	if (diffY > 0) {
		$.fn.fullpage.moveSectionDown();
	} else {
		$.fn.fullpage.moveSectionUp();
	}
});


  $('.menu').on('click touchstart', 'a', function(){
		var slide = $(this).attr('data-goto');
		
		$.fn.fullpage.moveTo(slide);
		$('.menu-btn').click()
		return;
    if($(this).attr('href')!='portfolio.php'){
      var link = $(this).attr('href');
      var el_id = $(this).attr('data-id');
      $(this).addClass('hovered');
      if(!isTouch){
        setTimeout(function() {
           location.href = "" + link;
        }, 1000);
        $('.preloader').fadeIn(1000);
      } else {
        $('.menu_item').removeClass('active');
        $(el_id).addClass('active');
        setTimeout(function() {
           location.href = "" + link;
        }, 1000);
        $('.preloader').fadeIn(1000);
      }
    } else {
    }
    return false;
  });
  
//new WOW().init();

$('.menu-btn').on('click touchstart', function(){
	$('.menu_popup_fx').find('li.active').removeClass('active');
	var activeSlide = $('.pageContent.section.active').data().anchor;
	$('.menu_popup_fx').find('li [data-goto="' + activeSlide + '"]').parent().addClass('active');
  if($(this).hasClass('active')) {
    $('.menu_popup').fadeOut(500);
    $('.menu_popup').removeClass('open');
    $(this).removeClass('active');
  } else {
    $('.menu_popup').fadeIn(500);
    $('.menu_popup').addClass('open');
    $(this).addClass('active');
    
    $('.order-btn.active').click();
    $('.cases-btn.active').click();
  }
  return false;
});
$('.menu a').hover(function(){
  $('.menu_item').removeClass('active');
  $($(this).attr('data-id')).addClass('active');
  return false;
});

/*order popup*/
if(window.location.hash=='#order'){
  $('.order-btn').fadeOut(500);
  $('.order-btn').addClass('active');
  $('.order_popup').fadeIn(500);
  $('.order_popup').addClass('open');
  setTimeout(function(){
    $('header .close-btn').fadeIn(300);
  }, 500);
}
$('.order-btn').on('click touchstart', function(){
  if($(this).hasClass('active')){
    history.pushState(null, null, window.location.pathname);
    $(this).fadeIn(300);
    $(this).removeClass('active');
    $('.order_popup').fadeOut(500);
    $('.order_popup').removeClass('open');
    $('header .close-btn').fadeOut(0);
  } else {
    window.history.pushState(null,null,'#order');
    $(this).fadeOut(300);
    $(this).addClass('active');
    $('.order_popup').fadeIn(500);
    $('.order_popup').addClass('open');
    setTimeout(function(){
      $('header .close-btn').fadeIn(300);
    }, 500);
    $('.menu-btn.active').click();
    $('.cases-btn.active').click();
  }
  return false;
});
$('.order_btn').on('click touchstart', function(){
  $('.order-btn').click();
});
$('.close-btn').click(function(){
  $('.order-btn').click();
  return false;
});

/*cases popup*/
$('.cases-btn').on('click touchstart', function(){
	$.fn.fullpage.moveTo('portfolio');
  if($(this).hasClass('active')){
		$(this).removeClass('active');
		$.fn.fullpage.moveTo('industries');
  }
  return false;
});
});