(function($){
    $(document).ready(function() {

        // Icons Carousel
        $(".icon-row").length && $(".icon-row").itemslide({
          left_sided: true
        });

        // Select
        $(".select-item").length && $(".select-item select").chosen();   

        $(".chosen-drop").on("click", function(e){
            if ($(e.target).hasClass("chosen-results") || $(e.target).hasClass("chosen-drop")){
                $(document).trigger("click");
            }
        });

        // Scroll Careers
        $(".scroll").length 
            &&
        $(".scroll").perfectScrollbar({
            wheelSpeed: 0.5,
            wheelPropagation: true,
            minScrollbarLength: 20
        });   

        // Slider
        if ( $(".career-slider").length ){

          $(".career-slider").slick({
            swipe:true,
            infinite: true,
            centerMode: true,
            dots:true,
            arrows: true,
            speed: 500,
            variableWidth: true,
            slidesToScroll: 1,
            slidesToShow: 1
          });

          $('.career-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
            var hrefCur = $(".slick-current").data("href");

            $(".career-block, .career-item").removeClass("active apply");
            $(".career-block#" + hrefCur).addClass("active");
            $(".scroll").perfectScrollbar("update");
          });
        }; 



        // Buttons Hover
        $('.btn-bubble').each(function() {
          var $circlesTopLeft = $(this).parent().find('.circle.top-left');
          var $circlesBottomRight = $(this).parent().find('.circle.bottom-right');

          var tl = new TimelineLite();
          var tl2 = new TimelineLite();

          var btTl = new TimelineLite({ paused: true });

          tl.to($circlesTopLeft, 1.2, { x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false) });
          tl.to($circlesTopLeft.eq(0), 0.1, { scale: 0.2, x: '+=6', y: '-=2' });
          tl.to($circlesTopLeft.eq(1), 0.1, { scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7' }, '-=0.1');
          tl.to($circlesTopLeft.eq(2), 0.1, { scale: 0.2, x: '-=15', y: '+=6' }, '-=0.1');
          tl.to($circlesTopLeft.eq(0), 1, { scale: 0, x: '-=5', y: '-=15', opacity: 0 });
          tl.to($circlesTopLeft.eq(1), 1, { scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0 }, '-=1');
          tl.to($circlesTopLeft.eq(2), 1, { scale: 0, x: '-=15', y: '+=5', opacity: 0 }, '-=1');

          var tlBt1 = new TimelineLite();
          var tlBt2 = new TimelineLite();
          
          tlBt1.set($circlesTopLeft, { x: 0, y: 0, rotation: -45 });
          tlBt1.add(tl);

          tl2.set($circlesBottomRight, { x: 0, y: 0 });
          tl2.to($circlesBottomRight, 1.1, { x: 30, y: 30, ease: SlowMo.ease.config(0.1, 0.7, false) });
          tl2.to($circlesBottomRight.eq(0), 0.1, { scale: 0.2, x: '-=6', y: '+=3' });
          tl2.to($circlesBottomRight.eq(1), 0.1, { scale: 0.8, x: '+=7', y: '+=3' }, '-=0.1');
          tl2.to($circlesBottomRight.eq(2), 0.1, { scale: 0.2, x: '+=15', y: '-=6' }, '-=0.2');
          tl2.to($circlesBottomRight.eq(0), 1, { scale: 0, x: '+=5', y: '+=15', opacity: 0 });
          tl2.to($circlesBottomRight.eq(1), 1, { scale: 0.4, x: '+=7', y: '+=7', opacity: 0 }, '-=1');
          tl2.to($circlesBottomRight.eq(2), 1, { scale: 0, x: '+=15', y: '-=5', opacity: 0 }, '-=1');
          
          tlBt2.set($circlesBottomRight, { x: 0, y: 0, rotation: 45 });
          tlBt2.add(tl2);

          btTl.add(tlBt1);
          btTl.to($(this).parent().find('.button-inner.effect-button'), 0.8, { scaleY: 1.1 }, 0.1);
          btTl.add(tlBt2, 0.2);
          btTl.to($(this).parent().find('.button-inner.effect-button'), 1.8, { scale: 1, ease: Elastic.easeOut.config(1.2, 0.4) }, 1.2);

          btTl.timeScale(2.6);

          $(this).on('mouseover', function() {
            btTl.restart();
          });
        });

        
    });

}(jQuery))