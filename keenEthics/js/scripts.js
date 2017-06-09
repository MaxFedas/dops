document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '');

(function($){
    $(document).ready(function() {

        // Placeholder Hide
        $("input, textarea").focus(function(){
           $(this).data("placeholder",$(this).attr("placeholder")).attr("placeholder","");
        }).blur(function(){
           $(this).attr("placeholder",$(this).data("placeholder"));
        });

        // Blog
        (function(){

            if (document.querySelector(".blog-grid")){
                var artItem = document.querySelectorAll(".art-item");

                artItem.forEach(function(item){

                    item.addEventListener("mouseenter", function(){
                        var imgHeight = item.querySelector(".img").clientHeight;  

                        this.querySelector(".art-desc-i").style = "top: " + (-imgHeight) + "px";
                    });

                    item.addEventListener("mouseleave", function(){

                        this.querySelector(".art-desc-i").style = "top: 0px";
                    });

                });
            }

        }());



        // Menu
        (function(){
            var $menuP = document.querySelectorAll(".menu > li");
            var $menuSubCur = document.querySelector(".menu > li.current .menu-sub");

            $menuP.forEach(function(item){

                item.addEventListener("mouseover", function(){
                    this.classList.remove("leave");
                    this.classList.add("hover");

                    if ( !this.className.match(/\bcurrent\b/)) { 
                        if ($menuSubCur) $menuSubCur.classList.add("hide");
                    }
                });

                item.addEventListener("mouseleave", function(callback){
                    var $this = this;

                    $this.classList.remove("hover");
                    $this.classList.add("leave");

                    if ($menuSubCur) $menuSubCur.classList.remove("hide");
                    
                    setTimeout(function(){
                        $this.classList.remove("leave");
                    }, 300);
                });
            });

            var $menuBtn = document.querySelector(".menu-btn");
            var open = false;

            $menuBtn.addEventListener("click", function(){
                var menuSidebar = document.querySelector(".menu-sidebar");

                menuSidebar.classList.add("open");
                open = true;
            });

            $(document).on("click", function(event) {

                if (open){
                    if ($(event.target).closest(".menu-sidebar, .menu-btn").length) return;
                    $(".menu-sidebar").removeClass("open");
                    event.stopPropagation();
                    open = false;
                }

            });

        }());

        // Social
        (function(){

            if (document.getElementById("soc-btn")){
                var $socBtn = document.getElementById("soc-btn");

                $socBtn.addEventListener("click", function(){
                    var socWrap = this.parentNode;

                    if (socWrap.className.match(/\bopen\b/)){
                        socWrap.classList.remove("open");
                        socWrap.classList.add("close");
                    } else {
                        socWrap.classList.remove("close");
                        socWrap.classList.add("open");
                    }
                    
                });
            }

        }());

        // Contacts
        (function(){
            if (document.querySelector(".contacts-st")){
                var $contBtn = document.querySelector(".contacts-st");

                $contBtn.addEventListener("click", function(){
                    this.classList.toggle("close");
                    document.querySelector(".contacts").classList.toggle("open");
                });
            }
        }());
        
        // Careers
        (function(){

            var delays = ["0.2s", "0.4s","0.6s", "0.8s", "1s"];                

            $(".point-flash span").css("animation-delay", function (){
                var rand = Math.floor(Math.random() * delays.length);

                return delays[rand];
            });

            $(".career-item").on("click", function(){
                var href = $(this).data("href");
                var $block = $(".career-block");

                $(".career-block, .career-item").removeClass("active apply");
                $(this).addClass("active");
                $(".career-block#" + href).addClass("active");

                $(".scroll").perfectScrollbar("update");
            });

            $(".btn-apply").on("click", function(e){
                $(this).parents(".career-block").addClass("apply");

                e.preventDefault();
            });

            

        }()); 

        // Workers
        (function(){

            if (document.querySelector(".worker-tooltip")){

                var tooltip     = document.querySelector(".worker-tooltip");
                var workerPoint = document.querySelectorAll(".worker");
                var tooltipImg  = tooltip.querySelector(".img img");
                var tooltipName = tooltip.querySelector(".name");
                var tooltipPos  = tooltip.querySelector(".pos");
                var tooltipDesc = tooltip.querySelector(".desc");

                workerPoint.forEach(function(item){

                    item.addEventListener("mouseover", function(){
                        var img  = item.getAttribute("data-img");
                        var name = item.getAttribute("data-name");
                        var pos  = item.getAttribute("data-pos");
                        var desc = item.getAttribute("data-desc");

                        var pointPosTop  = item.offsetParent.offsetTop + item.offsetTop + 30;
                        var pointPosLeft =  item.offsetParent.offsetLeft + item.offsetLeft - 93;    
                        if (window.innerWidth < 768) pointPosLeft = 30;

                        //item.offsetParent.offsetLeft + item.offsetLeft - 53;

                        tooltipImg.setAttribute("src", "images/" + img);
                        tooltipName.textContent = (name);
                        tooltipPos.textContent  = (pos);
                        tooltipDesc.textContent = (desc);

                        if (item.className.match(/\bright\b/)){
                            tooltip.classList.add("right");
                        }

                        tooltip.style = "top: " + pointPosTop + "px; left: " + pointPosLeft + "px";
                        tooltip.classList.remove("hide");
                        tooltip.classList.add("show");
                    });

                    item.addEventListener("mouseleave", function(){

                        setTimeout(function(){
                            tooltip.classList.remove("show", "right");
                            tooltip.style = "top: -200px";
                        }, 50);
                        
                        tooltip.classList.add("hide");
                        
                    });
                });    

            }

        }());   

        // Colors Items Width 
        (function(){

            if (document.querySelector(".color-list")){
                var color = document.querySelectorAll(".color-list li");
                var colorNum = color.length;

                color.forEach(function(item){
                    item.style = "width:" + ((100-(2*colorNum*0.25))/colorNum) + "%";
                });    
                

            }

        }());

        
        

        


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

    // forEach for IE
    (function(){
        if ( typeof NodeList.prototype.forEach === "function" ) return false;
        NodeList.prototype.forEach = Array.prototype.forEach;
    }());

    // classList for IE
    if ( /MSIE 9/i.test(navigator.userAgent) ) include("./js/classList.min.js");
    
}(jQuery))
