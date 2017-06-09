document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '');

$(document).ready(function() {

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

    $(".section-top-photo").addClass("animate");
    
    $(window).on("load", function(){

        // $(".preloader").fadeOut(500, function(){
            
        // });
        animate();
    });
	
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
	
    // Scrollbar
    $(".scroll").mCustomScrollbar({
        axis:"x",
        scrollInertia:600,
        mouseWheel:false
    });

    $("<span>" + $(".drag-text").text() + "</span>").appendTo(".mCSB_dragger_bar");

    // Slider
    $(".rules-slider").length && $(".rules-slider #slider").anythingSlider({  
        autoPlay            : false,

        toggleArrows        : false,
        expand              : true,
        resizeContents      : true,
        resumeDelay         : 0,
        hashTags            : false,
        infiniteSlides      : true,
        stopAtEnd           : false,

        buildArrows         : true,      
        buildNavigation     : false,      
        buildStartStop      : false,
        mode                : "fade",

        onSlideComplete: function(slider){
            var cur = slider.currentPage;
            $(".rules-point").removeClass("act");
            $(".rules-point").eq(cur-1).addClass("act");
        }        
    });          

    $(".rules-nav a").on("click", function(e){
        var slide = $(this).attr("href").substring(1);
        $("#slider").anythingSlider(slide);
        $(".rules-point").removeClass("act");
        $(this).parent().addClass("act");

        e.preventDefault();
    });

    // SVG Drowing Set
    replaceWithPaths($("#hier-svg, #title-b-svg, .ico-svg"));
    setDash($("#hier-svg, #title-b-svg, .ico-svg"));

	windowSize();	
	$(window).resize(windowSize); 
});

$(window).on("scroll", function(){
    animate();
});


// Animate
function animate(){
    
    $.fn.isOnScreen = function(x, y){
        if(x == null || typeof x == 'undefined') x = 1;
        if(y == null || typeof y == 'undefined') y = 1;

        var win = $(window);

        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var height = this.outerHeight();
        var width = this.outerWidth();

        if(!width || !height){
            return false;
        }

        var bounds = this.offset();
        bounds.right = bounds.left + width;
        bounds.bottom = bounds.top + height;

        var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

        if(!visible){
            return false;
        }

        var deltas = {
            top : Math.min( 1, ( bounds.bottom - viewport.top ) / height),
            bottom : Math.min(1, ( viewport.bottom - bounds.top ) / height),
            left : Math.min(1, ( bounds.right - viewport.left ) / width),
            right : Math.min(1, ( viewport.right - bounds.left ) / width)
        };

        return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y;
    };

    $(".animate-item").each(function(){
        if (!$(this).hasClass("animate")){
            var screen = $(this).attr("data-screen") || 0.5;  

            if ($(this).isOnScreen(0, screen)){
                  
                $(this).addClass("animate");

                // Counting Number
                $(this).find(".count").each(function (){
                    $(this).prop("Counter", 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 2200,
                        easing: "swing",
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
            }
        } 
    });
}

// Prototype Scroll Width
function protScroll(){
    var winWidth = window.innerWidth,
        socketWidth = $(".socket").innerWidth(),
        pad = ( winWidth - socketWidth )/2;

    $(".prot-wrap, .prot-wrap .mCustomScrollBox").width( Math.round(socketWidth - 124 + pad) );
}

// Window Size
function windowSize(){
    protScroll();    
}