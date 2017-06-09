
$(function() {

	var controller = new ScrollMagic.Controller();
	var trigger = "#features";
	var startOffset = -300;

	if (window.innerHeight > 1000){
		startOffset = -80;
	} else if (window.innerHeight > 840){
		startOffset = -180;
	} else if (window.innerHeight > 700){
		startOffset = -250;
	}

	//console.log(window.innerHeight, startOffset);

	var tween_0 = TweenMax.to("#case-fly", 1, { x:"+=295", rotation:10, ease: Ease.easeNone});
	var scene_0 = new ScrollMagic.Scene({
			triggerElement: "#features", 
			duration: 350,  
			offset: startOffset
		})
		.setPin("#case-fly")
		.setTween(tween_0)
		//.addIndicators({name: "1: to right "}) 
		.addTo(controller);	

	var tween_1 = TweenMax.to("#case-fly", 1, { rotation:0, ease: Ease.easeNone});				
	var scene_1 = new ScrollMagic.Scene({
			triggerElement: "#features", 
			duration: 350,  
			offset: -30
		})
		.on("progress", function(event){
			if (event.progress > 0.4) $("#features").addClass("animate");
		})
		.setPin("#case-fly")
		.setTween(tween_1)
		//.addIndicators({name: "1.1: rotate "}) 
		.addTo(controller);	

	var tween_2 = TweenMax.to("#case-fly", 1, { y:"+=80", ease: Ease.easeNone});	
	var scene_2 = new ScrollMagic.Scene({
			triggerElement: "#features", 
			duration: 200,  
			offset: 450
		})
		.setPin("#case-fly")
		.setTween(tween_2)
		//.addIndicators({name: "2: from feature "}) 
		.addTo(controller);		

	var tween_3 = TweenMax.to("#case-fly", 1, { x:"+=290", rotation:-10, ease: Ease.easeNone});	
	var scene_3 = new ScrollMagic.Scene({
			triggerElement: "#features", 
			duration: 200,  
			offset: 650
		})
		.on("end", function(){
			$("#spec").addClass("animate");
		})
		.setPin("#case-fly")
		.setTween(tween_3)
		//.addIndicators({name: "3: to spec "}) 
		.addTo(controller);	

	var tween_4 = TweenMax.to("#case-fly", 1, { rotation:0, ease: Ease.easeNone});	
	var scene_4 = new ScrollMagic.Scene({
			triggerElement: "#features", 
			duration: 280,  
			offset: 800
		})
		.setPin("#case-fly")
		.setTween(tween_4)
		//.addIndicators({name: "4: rot "}) 
		.addTo(controller);		


});