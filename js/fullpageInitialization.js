$(function() {
  $(document).ready(function() {
		$('#fullpage').fullpage({
			onLeave: function(index, nextIndex, direction) {
        var nextSectionId = '#section-' + nextIndex;
        var nextSection = $(nextSectionId);
        var logoName = 'bz';
        if (nextSection.data().anchor != 'home') {
          logoName = nextSection.data().anchor;
        }
        $($('.logo')[0].children[0]).html(`dops <span>.</span> ${logoName}`);
				if (nextSection.data().loadedcontent) return;
					$.ajax({
						url: nextSection.data().page,
						type: 'post',
						dataType: 'html',
						success: function(data) {
							var htmlData = $.parseHTML(data);
							nextSection.html(htmlData);
						},
						error: function(e) {
							console.log('ERROR', e);
						},
						complete: function() {
              $('#fullpage').data().pageLoad = true;
              nextSection.data().loadedcontent = true;
							$.getScript("/js/script.js", function() {
                  $('a[href="#proc-tab-1"]').click();
              });  
						}
					});
			},
      afterLoad: function(anchorLink, index){
        if (anchorLink === 'portfolio') {
          $('.cases-btn').addClass('active');
        } else {
          $('.cases-btn').removeClass('active');
        }
      }
		});
	});
});