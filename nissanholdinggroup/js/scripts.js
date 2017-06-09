//document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '');

(function($){

    // Load
    $(window).on("load", function(){

        $("html").addClass("load");
        
        setTimeout(function(){
            document.querySelector(".preloader").classList.add("hide");

            $(".section.home").addClass("visible");
        }, 400);
        
    });

    // safety of content
    // $(document).on('keydown', function(e) {
    //   if((navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey) && (e.which == 83)) {
    //     e.preventDefault();
    //     return false;
    //   }
    // });
    // $('body').on('contextmenu', function(e){ return false; });
    // $('body').bind('copy paste',function(e) {
    //     e.preventDefault(); return false; 
    // });

    $(document).ready(function(){

        // Placeholder Hide
        $("input, textarea").focus(function(){
           $(this).data("placeholder",$(this).attr("placeholder")).attr("placeholder","");
        }).blur(function(){
           $(this).attr("placeholder",$(this).data("placeholder"));
        });

        // Page Piling
        if (window.innerWidth > 767){
            $("#pagepiling").pagepiling({
                menu: "#menu",
                anchors: ["home", "company", "projects", "contacts"],
                scrollingSpeed: 900,

                onLeave: function(anchorLink, index){
                    $(".active").addClass("visible");

                    setTimeout(function(){
                        $(".gallery-block").scrollTop(0);    
                    }, 1000);
                    
                }
            });
        };


        $(".scroll").length && $(".scroll").perfectScrollbar({
            wheelSpeed: 0.5,
            wheelPropagation: false,
            minScrollbarLength: 20
        }); 

        $(".tab").on("click", function(){
            var id = $(this).data("href");

            $(this).parent().find(".tab").removeClass("is-active");    
            $(this).addClass("is-active");
            $(".tab-block").removeClass("is-active");
            $(".tab-block#" + id).addClass("is-active");

            $(".tab-block#" + id).perfectScrollbar("update"); 

            scrollCheck();
        });

        $(".to-tab").on("click", function(){
            scrollCheck();
        });

        $(".btn-menu").on("click", function(){
            $("#menu").addClass("open");
        });

        $(".menu-close").on("click", function(){
            $("#menu").removeClass("open");
        });


        $("#menu li a").on("click", function(e){

            if (window.innerWidth < 768){
                var id = $(this).attr("href").substring(1);

                $("#menu").removeClass("open");
                goToSection(id);
                e.preventDefault();
            };
        });

        function goToSection(id){
            id = id.replace("link", "");
            $('html,body').animate({ scrollTop: $(".section." + id).offset().top}, 600);
        }

        function scrollCheck(){
            if ( $("#hotels.gallery-block").is(".is-active") && window.innerWidth > 1024 ){
                 $(".st-down-wrap").show();
            } else {
                 $(".st-down-wrap").hide();
            }
        }

        $(document).on("click", function(event) {
            if ($(event.target).closest("#menu, .btn-menu").length) return;
            $("#menu, .btn-menu").removeClass("open");
            event.stopPropagation();
        });


        $('.gallery-item').each(function() { 
            $(this).magnificPopup({
                mainClass: 'mfp-with-zoom',
                delegate: 'a', 
                type: 'image',
                midClick: true,

                zoom: {
                    enabled: true,
                    duration: 300

                    // opener: function(element) {
                    //   return element.find('img');
                    // }
                },

                image: {
                    verticalFit: true
                },

                gallery: {
                    enabled:true

                    // callbacks: {
                    //     change: function(){
                    //         if (this.isOpen){
                    //         this.wrap.addClass('mfp-open');
                    //     }
                    // }
                    // }
                },

                callbacks: {

                    beforeClose: function(){
                        this.content.addClass('hinge');
                    }, 

                    close: function(){
                        this.content.removeClass('hinge'); 
                    }
                }
                
            });
        });

        // Gallery
        $(".gallery-item").on("click", function(){
            var $this     = $(this),
                $title    = $(".mfp-title_"),
                $city     = $(".mfp-list-item.city"),
                $country  = $(".mfp-list-item.country"),
                $type     = $(".mfp-list-item.type"),
                x         = $this.data("x"),
                y         = $this.data("y");

                $title.text($this.data("title"));
                $city.text($this.data("city"));
                $country.text($this.data("country"));
                $type.text($this.data("type"));

                $(".map-coords").attr("lat", x).attr("lng", y);
        });

        $(document).on("click", ".map-coords", function(e){
            var img    = $(".mfp-img"),
                width  = img.width(),
                height = img.height(),
                offsetLeft  = $(".mfp-content").position().left,
                offsetTop   = $(".mfp-content").position().top,

                $back = $(".map-back"),
                $toMap = $(".map-coords");

            $toMap.fadeOut(100);    
            $back.fadeIn(200);
            $(".mfp-arrow").fadeOut(100);
                
            $(".gallery-map")
                .fadeIn()
                .width(width)
                .height(height)
                .css({
                    "left": 0,
                    "top":  30 
                });

            initialize($(this));    


            e.preventDefault();
        });

        $(document).on("click", ".map-back", function(){

            $(this).fadeOut(200);
            $(".map-coords, .mfp-arrow").fadeIn(100);
            $(".gallery-map").fadeOut(300);
        });

        // Callback
        // $(".btn-callback").on("click", function(){
        //     $(".popup-wrap").fadeIn(300);
        // });

        // $(".popup .close").on("click", function(){
        //     $(".popup-wrap").fadeOut(300);
        // });


        // Parallax
        // $(window).on("scroll", function(){
        //     var point = $(".point");
        //     var coeff = 0.5;
        //     var windowTop = $(window).scrollTop();

        //     point.css("transform", "translateY(" + windowTop*coeff + ")");
        // });

        $(".diagram-item").hover(function(){
            var val = $(this).find(".diagram-val span").text();
            var $diagram = $(".diagram-info span");
            var id = $(this).data("href");

            $diagram.text(val);
            $(".diagram-item").removeClass("active");
            $(this).addClass("active");

            $(".diagram").removeClass("active");
            $(".diagram[data-d='" + id + "']").addClass("active");
            
        });
        
    });

    // Map
    function initialize(link) {
        var mapDiv = $("#map");

        var options = {
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: new google.maps.LatLng(link.attr('lat'), link.attr('lng'))
        };

        var map = new google.maps.Map(mapDiv[0], options);

        var point = new google.maps.LatLng(link.attr('lat'), link.attr('lng'));

        var image = new google.maps.MarkerImage(
          "images/marker.png",
          new google.maps.Size(19,24)
        );

        var marker = new google.maps.Marker({
            icon: image,
            draggable: false,
            raiseOnDrag: false,
            map: map,
            position: point
        });

        var styles = [{
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "saturation": 36
                },
                {
                    "color": "#000000"
                },
                {
                    "lightness": 40
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#000000"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 17
                },
                {
                    "weight": 1.2
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 17
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 29
                },
                {
                    "weight": 0.2
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 18
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 19
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 17
                }
            ]
        }
      ];

      map.setOptions({styles: styles});
    };
    
}(jQuery));
