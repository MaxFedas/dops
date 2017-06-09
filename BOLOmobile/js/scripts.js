document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '');

(function($){
    $(document).ready(function() {

        // Placeholder Hide
        $("input, textarea").focus(function(){
           $(this).data("placeholder",$(this).attr("placeholder")).attr("placeholder","");
        }).blur(function(){
           $(this).attr("placeholder",$(this).data("placeholder"));
        });

        // Tel Input Mask 
        if ($(".mask").length) $(".mask").mask("+38 (099) 999-99-99");

        // Input Label Fly Up
        var $formLabel = document.querySelectorAll(".form-input-r label");

        $formLabel.forEach(function(elem){
            elem.addEventListener("click", function(){
                var inputWrap = this.parentNode;

                inputWrap.classList.add("is-active");
                inputWrap.querySelector("input").focus();
            });

            elem.nextElementSibling.addEventListener("blur", function(){
                if ( !this.value.length ) this.parentNode.classList.remove("is-active");
            });
        });

        // Menu
        (function(){
            var $menuWrap = $(".menu-wrap");
            var $btn      = document.getElementById("btn-menu");
            var $html     = document.querySelector("html");
            
            $btn.addEventListener("click", function(){

                $menuWrap.fadeToggle(450);
                $("#header").toggleClass("shadow");

                ($html.className.match(/\bmenu-open\b/)) ? menuClose() : menuOpen()

            });

            ClickOut.prototype.menuClose = function(){
                $menuWrap.fadeOut(450);
                $("#header").addClass("shadow");
                menuClose();
            };

            $menuWrap.on("click", function(){
                new ClickOut(".menu").menuClose();
            });

            function menuOpen(){
                $html.classList.remove("menu-close");
                $html.classList.add("menu-open");
            };  

            function menuClose(){
                $html.classList.remove("menu-open");
                $html.classList.add("menu-close");
            };  

        }());

        // Filter
        (function(){

            $(".filter-top .filter-button").on("click", function(){
                var id = $(this).data("id");

                if ($(this).is(".is-active")){
                    $(".filter-drop-wrap").slideUp(200);
                    $(this).removeClass("is-active");
                } else {
                    $(".filter-drop-wrap").hide();
                    $(".filter-top .filter-button").removeClass("is-active");
                    $(".filter-drop-wrap" + "#" + id).slideDown(400);
                    $(this).addClass("is-active");
                }
            });

            $(".filter-point-head").on("click", function(e){
                var $this        = $(this);
                var $filterPoint = $this.parent();
                var $filterDrop  = $this.next();
                var target = $(e.target)

                if ($filterPoint.is(".is-open")){
                    $filterPoint.removeClass("is-open");
                    $filterDrop.slideUp(150);
                } else {
                    if (!target.hasClass("delete")){
                        $(".filter-point").removeClass("is-open");
                        $(".filter-point-drop").slideUp(150);
                        $filterPoint.addClass("is-open");
                        $filterDrop.slideDown(200);
                    }
                }                
            });


            $(".filter-point-item").on("click", function(){
                var $this = $(this);
                var text  = $.trim($this.text());
                var head  = $this.parent().prev();
                var input = head.find(".filter-point-input");
                var def   = head.find("span");

                input.val(text);
                head.find("div").text(text);
                head.addClass("is-active");
            });

            $(".filter-point-head .delete").on("click", function(){
                var head = $(this).parent();

                head.removeClass("is-active");
            });

            $(".filter-phone-drop .phone-item").on("click", function(){
                var $this = $(this);
                var id    = $this.data("id");
                var name  = $this.find(".title-m").text();

                $(".filter-phone-drop .phone-item").removeClass("is-active");
                $this.addClass("is-active");

                $(".filter-button[data-id='f2']")
                    .find("span")
                    .text(name)
                    .end()
                    .removeClass("is-active");

                $(".filter-drop-wrap#f2").slideUp(200);    
            });

        }());

        // Products
        (function(){
            $(".product-main").on("click", function(){
                $(".product-block").removeClass("open-menu");
                $(this).parent().addClass("open-menu");
            });

            new ClickOut(".product-block").removeClass("open-menu");
        }());

        // Switch
        var $sLabel = $(".switch label");

        $sLabel.on("click", function(){
            var $this = $(this);

            $sLabel.removeClass("is-active");
            $this.toggleClass("is-active");

            ( $this.is(":last-child") ) ? $this.parent().addClass("other") : $this.parent().removeClass("other");
        });

        // Basket/Favorite Drop
        var timer;

        $(document).on("click", function(e){
            var button;
            var target = $(e.target);
            var $basketDrop = $(".header-basket-drop");
            var $favDrop = $(".header-fav-drop");

            if (target.is(".basket-open") || target.is(".basket-back") || target.is(".basket-open i")){
                button = "basket";
            } else if (target.is(".fav-open") || target.is(".fav-back") || target.is(".fav-open i")) {
                button = "fav";
            };

            if (button){
                headInfoClose();
            };
            
            switch(button){
                case "basket":
                    $favDrop.slideUp(200).removeClass("is-open");
                    $basketDrop.slideToggle(200).toggleClass("is-open");
                    if ($basketDrop.is(".is-open")) toTop();

                break;

                case "fav":
                    $basketDrop.slideUp(200).removeClass("is-open");
                    $favDrop.slideToggle(200).toggleClass("is-open");
                    if ($favDrop.is(".is-open")) toTop();

                break;   
            }
        });

        // Add To Basket/Favorite
        var timerDrop;

        $(".product-menu li a").on("click", function(e){
            var $this = $(this);
            var btn = $(this).attr("class");

            switch(btn){
                case "in-basket":

                    headInfoDef();
                    $(".basket-info").show();
                    $(".header-info-drop").slideDown();

                break;

                case "in-fav":

                    headInfoDef();
                    $(".fav-info").show();
                    $(".header-info-drop").slideDown();

                break;    
            };


            window.clearTimeout(timerDrop);
            timerDrop = setTimeout(headInfoClose, 3000);

            e.preventDefault();
        });

        $(".fav-info-back, .basket-info-back").on("click", function(){
            headInfoClose();
        });

        function headInfoDef(){
            $(".fav-info, .basket-info").hide();
        };

        function headInfoClose(){
            $(".header-info-drop").slideUp();
        };


        // Counter Header
        // var $basketItems = $(".items.bkt i");
        // var $favItems = $(".items.fav i");

        // var counter = {

        //     basket: function(){
        //         $basketItems.text(parseInt($basketItems.text()) + 1);
        //     },

        //     fav: function(){

        //     }
        // };

        
        
        // Basket Items PLus / Minus
        (function(){
           var $prodItems = document.querySelectorAll(".product-items");

            $prodItems.forEach(function(elem){
                var btn = elem.querySelectorAll(".circ"),
                    input = elem.querySelector("input");

                for (var i = 0; i < btn.length; i++) {

                    btn[i].addEventListener("click", function(){
                        var btnClass = this.className.split(" ");

                        for (var i = 0; i < btnClass.length; i++ ){
                            switch (btnClass[i]){
                                case "plus":
                                    input.value = parseInt(input.value) + 1; 
                                break;

                                case "minus":
                                    if (input.value != 1) input.value = parseInt(input.value) - 1;                  
                                break;    
                            }
                        }
                        
                    }); 
                }  
            })    
        }());

        // Category BG
        $(".category-item").each(function(){
            var color = $(this).data("color");

            $(this).find(".image").css("background", color);
        });

        // Tabs Radiobox
        (function(){
            var radioTab = document.querySelectorAll(".radio-tab input");

            function changeHandler(event) {
                var attr = this.getAttribute("data-id");
                var tab = this.parentNode.parentNode.parentNode.querySelectorAll(".tab");

                Array.prototype.forEach.call(tab, function(elem){
                    elem.parentNode.classList.add("is-open");
                    if (elem.classList.contains("is-show")) elem.classList.remove("is-show");
                });    

                document.getElementById(attr).classList.add("is-show");
            }

            Array.prototype.forEach.call(radioTab, function(radio) {
                radio.addEventListener("change", changeHandler);
            });
        }());   

        // Tabs FAQ
        (function(){
            var $tab = document.querySelectorAll(".faq-tab");

            $tab.forEach(function(item){

                item.addEventListener("click", function(){
                    var id = this.getAttribute("data-tab");
                    var $tabContent = document.querySelectorAll(".tab-block");

                    for ( var i = 0; i < $tabContent.length; i++ ){
                        $tabContent[i].classList.remove("is-show");
                        $tab[i].classList.remove("is-current");

                        console.log($tab[i]);
                    };

                    item.classList.add("is-current");
                    document.getElementById(id).classList.add("is-show");
                });
            });

        }());

        // FAQ
        $(".faq-head").on("click", function(){
            var $this = $(this).parent();
            
            if ($this.is(".is-open")){
                $this.removeClass("is-open").find(".faq-drop").slideUp(400);
            } else {
                $(".faq-block").removeClass("is-open");
                $(".faq-drop").slideUp(400);
                $this.addClass("is-open").find(".faq-drop").slideDown(400);
            }
        });

        
        windowSize();   
        $(window).resize(windowSize); 
        
    });


    var cachedWidth = window.innerWidth;

    function windowSize(){
        var winWidth = window.innerWidth,
            docWidth = $(document).width();

        // Resize Mobile
        if (winWidth !== cachedWidth){
            

            cachedWidth = winWidth;
        }   

        // Mobile Viewport
        if (winWidth >= 767){
            $("").attr("style", "");
        } 
            
    };

    // Click Out
    function ClickOut(element){
        this.element = element;
        
        this.removeClass = function(class_){
            $(document).on("click", function(event) {
                if ($(event.target).closest(element).length) return;
                $(element).removeClass(class_);
                event.stopPropagation();
            });
        };
    };

    // To Top Page
    function toTop(){
        $("html, body").animate({ scrollTop: 0 }, "slow");
    };

    // forEach for IE
    (function(){
        if ( typeof NodeList.prototype.forEach === "function" ) return false;
        NodeList.prototype.forEach = Array.prototype.forEach;
    }());

}(jQuery))
