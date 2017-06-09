$(document).ready(function() {

	// Tooltips
	$(".tooltip").length 
		&& 
	$(".tooltip").tooltipsy({
		show: function (e, $el) {
	        $el.css({
	            'top': parseInt($el[0].style.top.replace(/[a-z]/g, '')) + 10 + 'px',
	            'opacity': '0',
	            'display': 'block'
	        }).animate({
	            'top': parseInt($el[0].style.top.replace(/[a-z]/g, '')) - 10 + 'px',
	            'opacity': '1'
	        }, 350);
	    }
	});

	// $(document).on("mouseover", ".tooltipsy", function(){
	// 	$(this).parent().remove();
	// });
	

	// Tel Copy
	if ( $(".tel-copy").length ) { 
		var clipboard = new Clipboard(".tel-copy");
	};	
    
});