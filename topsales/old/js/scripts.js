document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '');

(function($){
    $(window).on("load", function(){
        $(".salesman-section").length
            &&
        $(".salesman-section .preloader").fadeOut(250);
    });

    $(document).ready(function(){

        // Scrollbar
        $(".scroll").length 
            &&
        $(".scroll").perfectScrollbar({
            wheelSpeed: 0.5,
            wheelPropagation: true,
            minScrollbarLength: 20
        }); 

        // Tab Scroll Update
        $(".tab").on("click", function(){
            setTimeout(scrollUpdate, 300);
        });

        // Tab Header Title
        $(".header-tabs a[data-toggle='tab']").on('shown.bs.tab', function(){
            var id = $(this).attr("href").substr(1);

            $(".title-tab").removeClass("active");
            $(".title-tab[data-id='" + id + "']").addClass("active");
        });

        // Inputs 
        $("input, textarea").focus(function(){
           $(this).data("placeholder", $(this).attr("placeholder")).attr("placeholder","");
        }).blur(function(){
           $(this).attr("placeholder", $(this).data("placeholder"));
        });

        swapValue = [];
        $(".modal-pass .input").each(function(i){
            swapValue[i] = $(this).val();
            $(this).focus(function(){
                if ($(this).val() == swapValue[i]) {
                    $(this).val("");
                }
            }).blur(function(){
                if ($.trim($(this).val()) == "") {
                    $(this).val(swapValue[i]);
                }
            });
        });

        (function(){
            var input = document.querySelectorAll(".input-item input");

            input.forEach(function(item){
                item.addEventListener("focus", function(){
                    this.parentNode.classList.add("focus");
                });

                item.addEventListener("blur", function(){
                    this.parentNode.classList.remove("focus");
                });
            });
        }());
        

        // Eye Password
        $(".btn-eye").on("click", function(){
            var input = $(this).prev();
            var type = input.attr("type");

            if (type == "password"){
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

        // Login Inputs
        (function(){

            $(".input-with-l label").on("click", function(){
                $(this).fadeOut(200).next("input").focus();
            });

            $(".input-with-l input").on("blur", function(){
        
               if ( $(this).val().length == 0 ) $(this).prev("label").fadeIn(200)

            });
        }());
        

        $(".input-time-ft").on("click", function(e){
            $(this)
                .parents(".input-wrap")
                .find(".input-bg").css({
                    "left": $(this).position().left, 
                    "top": $(this).position().top,
                    "height": $(this).height(),
                    "width": $(this).width(),
                    "opacity": 1
                });
        });

        // User Select
        if ($(".user-select").length){
            $(".selectpicker").selectpicker();

            $(".user-select").length && $(".user-select div.dropdown-menu").perfectScrollbar({
                wheelSpeed: 0.5,
                wheelPropagation: true,
                minScrollbarLength: 20
            }); 

            $(".user-select").on("show.bs.dropdown", function (e) {
                setTimeout(function(){
                    $(".user-select div.dropdown-menu").perfectScrollbar("update");
                }, 150);
            });
        };

        // Dropdown New Message
        // $("#dropdown-nm").on("show.bs.dropdown", function(){
        //     console.log("1")
        // });

        $(document).on('click', ".dropdown-nm-top .search", function(e) {
            e.stopPropagation();
        });

        
        // Menu Mobile
        (function(){
            $(document).on("click", function(event) {
                if ($(event.target).closest(".menu-sidebar").length) return;
                menuClose();
                event.stopPropagation();
            });

            $(".btn-menu-close").on("click", function(){
                menuClose();
            });

            $("li.login").on("click", function(){
                if (window.innerWidth < 767) menuClose();
            });

            function menuClose(){
                $(".menu-sidebar").removeClass("in");
            };
        }());
        

        // Chat Mobile Open
        $(".btn-chat").on("click", function(){
            $(this).fadeOut(200);
            $(".chat").addClass("is-open");
            setTimeout(scrollUpdate, 300);
        });

        $(".btn-chat-close").on("click", function(){
            $(".chat").removeClass("is-open");
            $(this).fadeIn(500);
        });

        // Carousel
        $(".salesman-carousel").length
            &&
        $(".salesman-carousel").bxSlider({
            mouseDrag: true,
            slideWidth: 130,
            touchEnabled: true,
            pager: false,
            moveSlides: 1,
            maxSlides: 6
        });

        // Validator
        $(".form-val").length 
            && 
        $(".form-val").validator();
        
        // Mask 
        if ($(".form-val").length){
            var ssn = document.getElementById("input-ssn");
            var inp_ssn = new Inputmask("999-99-9999");

            inp_ssn.mask(ssn);
        };  

        // Input File Hover
        $(".input-file").on("mouseover", function(){
            $(this).find(".btn").addClass("hover");
        });

        $(".input-file").on("mouseleave", function(){
            $(this).find(".btn").removeClass("hover");
        });

        // Chat Messages
        (function(){

            $(".chat-my-message").on("click", function(){
                if ($("html").hasClass("touchevents")){
                    $(this).find(".dropdown-menu").toggle();
                }
            });

            $(".circ-dropdown-btn").on("click", function(){
                $(this).parents(".chat-my-message").toggleClass("is-active");
            });

            $(document).on("click", function(event) {
                if ($(event.target).closest(".chat-my-message").length) return;
                $(".chat-my-message.is-active").not(".is-edit").removeClass("is-active");
                event.stopPropagation();
            });

            $(".circ-dropdown-item").on("click", function(){
                var $this = $(this);
                var $msgWrap = $this.parents(".chat-my-message");

                switch($this.data("id")){

                    case  "msg-del": // Delete
                        $msgWrap.remove();
                    break;  

                    case "msg-edit": // Edit

                        var msg  = $msgWrap.find(".message");
                        var msgE = $msgWrap.find(".message-edit");
                        var msgText = msg.text();

                        $msgWrap
                            .addClass("is-active is-edit")
                            .find(".circ-dropdown-menu")
                            .hide();

                        msgE
                            .find("textarea")
                            .text(msgText)
                            .end()
                            .fadeIn(300);

                        msg
                            .fadeOut(100);

                    break;
                }
            }); 

            $(".btn-save").on("click", function(){ // Save
                var $msgWrap = $(this).parents(".chat-my-message");
                var taText = $msgWrap.find(".message-edit textarea").val();

                $msgWrap.find(".message").text(taText);
                editClose($(this));
            });

            $(".btn-cancel").on("click", function(){ // Cancel
                editClose($(this));
            });

            function editClose(this_){
                var $msgWrap = this_.parents(".chat-my-message");

                $msgWrap
                    .removeClass("is-active is-edit")
                    .find(".message-edit")
                    .hide()
                    .end()
                    .find(".message")
                    .fadeIn(200)
                    .end()
                    .find(".circ-dropdown-menu")
                    .fadeIn(300);
            };

        }()); // End Chat Messages
        



        // Messanger
        (function(){
            if ($("html").is("#messages-page")){

                var $tab   = document.querySelectorAll(".tabs-hd > li");
                var $int_  = document.querySelector("#int");

                $tab.forEach(function(item){
                    item.addEventListener("click", function(){
                        
                        var $userItem = this.querySelector(".user-item");
                        var name = this.querySelector(".name span").textContent;
                        var imgSrc = getImg(this).getAttribute("src");
                        var $tabActGhost = document.querySelector(".messanger-conv .active-g");
                        
                        _buttonBack.show();

                        $tabActGhost.classList.remove("active-g");
                        item.classList.add("active-g");

                        $int_.querySelector(".name span").innerHTML = name;
                        getImg($int_).setAttribute("src", imgSrc);                        

                        ($userItem.className.match(/\bonline\b/)) ? $int_.classList.add("online") : $int_.classList.remove("online"); 
                        
                        _mesTabsChange_mob.goToConv();
                    });
                });

                // $tabConvList.addEventListener("click", function(){
                //     _mesTabsChange_mob.goToList();
                // });

                document.querySelectorAll(".tabs-cell > li").forEach(function(item){
                    item.addEventListener("click", function(){
                        //$html.classList.add("tab-open");
                        _buttonBack.show();

                        if ($(".tab-back.active").length){
                            $(".tab-back.active").addClass("active-g");
                        }
                    });
                });

                $back.addEventListener("click", function(){
                    _mesTabsChange_mob.goToList();
                    //$tabConvList.classList.add("active");
                });

                // document.querySelectorAll(".tab-indicator").forEach(function(tab){
                //     tab.addEventListener("click", function(e){
                //         e.preventDefault();
                //     });
                // });
            }
            
            function getImg(element) {
               return element.querySelector(".avatar img");
            }
        }());

        // Answer Switch
        $(".recommend-item.answer").each(function(){
            var $check = $(this).find(".switch-button input");
            var $ta    = $(this).find(".type-message");

            $check.change(function(){
                ($check.is(":checked")) ? $ta.slideDown(300) : $ta.slideUp(300)
            });
        });

        // Calc Height
        calcHeight();

        windowSize();   
        $(window).resize(windowSize); 
        
    });

    // Global Variables
    var cachedWidth = window.innerWidth;
    var mesTabs = document.querySelectorAll(".messanger-main-col .tab-pane");
    var $html  = document.querySelector("html");
    var $back  = document.querySelector(".btn-close");
    var $tabActGhost = document.querySelector(".messanger-conv .active-g");
    var $tabConvList = document.querySelector("#tab-conv-list");
    var $tabConvItem = document.querySelector("#tab-conv-item");

    // Window Resize
    function windowSize(){
        var winWidth = window.innerWidth;
        var mobile;
        var tablet;

        // Mobile Viewport Detect
        (winWidth <= 767) ? mobile = true : mobile = false;

        // Tablet Viewport Detect
        (winWidth <= 1023) ? tablet = true : tablet = false;
        
        // Short Name
        wordShort(mobile); 

        // Scrollbar Update
        scrollUpdate();

        // Messanger Tabs    
        $("#messages-page").length && mesTabsMobile(tablet);

        // Calc Height    
        calcHeight();         

        // Resize Mobile
        if (winWidth !== cachedWidth){
            

            cachedWidth = winWidth;
        };  
            
    };

    
    // Mesanger Tabs Mobile
    function mesTabsMobile(tablet){
        if (tablet){
            removeMesAct();

            _mesTabsChange_mob.removeTabsAct();
            //$tabConvList.classList.add("active");

            // var $tabUpper = document.querySelectorAll(".tab-upper");
            // $tabUpper.forEach(function(item){
            //     if (item.className.match(/\bactive\b/)) _buttonBack.show()
            // });

        } else {
            var mesLiTabs = document.querySelectorAll(".messanger-conv li");

            _buttonBack.hide();

            mesLiTabs.forEach(function(item, index, array){
                if (item.className.match(/\bactive-g\b/)){
                    $tabActGhost = document.querySelector(".messanger-conv .active-g");

                    mesTabs[index].classList.add("active");
                    $tabActGhost.classList.add("active");
                }
            });
        }         
    };

    // Remove Active
    function removeMesAct(){
        var $tabAct = document.querySelectorAll(".messanger-wrapper .active");

        _buttonBack.hide();

        if ($tabAct.length){
            $tabAct.forEach(function(item){
                item.classList.remove("active");
            });
        }    
    }

    // Table Short Word

    function wordShort(mobile){
        var $name = document.querySelectorAll(".name-short b");
        var $month = document.querySelectorAll(".month-short b");

        // if (mobile && $name.length){
        //     $name.forEach(function(item){
        //         shorting(item, 0, 1);
        //     });
        // }

        if (window.innerWidth < 1150 && $month.length){
            $month.forEach(function(item){
                shorting(item, 0, 3);
            });
        }

        function shorting(item, start, end){
            item.innerHTML = item.textContent.substring(start, end);
        }
    }   

    // Back Button
    var _buttonBack = {
        show: function(){
            $html.classList.add("tab-open");
        },

        hide: function(){
            $html.classList.remove("tab-open");
        }
    }

    // Messanger Tabs Mobile Click
    var _mesTabsChange_mob = {
        removeTabsAct: function(){
            document.querySelectorAll(".header-tabs.visible-xs .tab").forEach(function(item){
                item.classList.remove("active");
            })
        },

        goToConv: function(){
            this.removeTabsAct();
            //$tabConvItem.classList.add("active");
        },

        goToList: function(){
            this.removeTabsAct();

            _buttonBack.hide();
            removeMesAct();

            if ($(".tab-back.active-g").length) $(".tab-back.active-g").addClass("active");
            //$(".tabs-hd .active").removeClass("active");
        }
    }

    // Calc Height Old Browsers
    function calcHeight(){

        if (!Modernizr.csscalc) {
            var win_h = window.innerHeight;
            var header_h = 75;
            var headerMob_h = 72;
            var headerSub_h = 65;
            var mesType_h = 63;
            var headerExp_h = header_h + headerSub_h;

            var th_h = 51;
            var chatBtm_h  = 116;
            var topCell_h = 57;
            var topCellMob_h = 48;

            if (window.innerWidth > 768){ // Desktop & Tablet
                $(".content-column").height(win_h);
                $(".content-viewport").height(win_h - header_h);
                //$(".chat > .scroll").height(win_h - chatBtm_h); // With Typing Field
                $(".chat > .scroll").height(win_h - mesType_h);
                $(".table-body").height(win_h - header_h - th_h);
                $(".ex .table-body").height(win_h - headerExp_h - th_h - 8);
                $(".messanger-conv").height(win_h - header_h - th_h);
                $(".messanger-window-inner").height(win_h - header_h - topCell_h - mesType_h);
                $(".table-cal").height(win_h - header_h - th_h - 200 - 8);
                $(".user-profile-wrapper .column").width( ($(".content").width() - 12) / 3 );
            } else { // Mobile
                $(".content-viewport").height(win_h - headerMob_h);
                $(".table-body").height(win_h - headerMob_h - th_h);
                $(".messanger-conv").height(win_h - headerMob_h - th_h);
                $(".messanger-window-inner").height(win_h - headerMob_h - topCellMob_h - mesType_h);
            }
            
        }
    }

    // Scroll Update
    function scrollUpdate(){
        $(".scroll").perfectScrollbar("update");
    }

    // forEach for IE
    (function(){
        if ( typeof NodeList.prototype.forEach === "function" ) return false;
        NodeList.prototype.forEach = Array.prototype.forEach;
    }());

}(jQuery));


