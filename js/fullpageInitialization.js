$(function() {
  $(document).ready(function() {
		$('#fullpage').fullpage({
			afterLoad: function(anchorLink, index) {
				var content = $(this);
        var logoName = 'bz';
        if (anchorLink != 'home') {
          logoName = anchorLink;
        }
        $($('.logo')[0].children[0]).html(`dops <span>.</span> ${logoName}`);
				if ($(this).data().loadedcontent) return;
        if ($(this).data().page === "/portfolio.php") {
          $('.cases-btn').click();
          $('#fullpage').data().pageLoad = true;
          return;
        }
					$.ajax({
						url: $(this).data().page,
						type: 'post',
						dataType: 'html',
						success: function(data) {
							var htmlData = $.parseHTML(data);
							content.html(htmlData);
						},
						error: function(e) {
							console.log('ERROR', e);
						},
						complete: function() {
              $('#fullpage').data().pageLoad = true;
              content.data().loadedcontent = true;
							$.getScript("/js/script.js", function() {});
						}
					});
			}
		});
	});
});