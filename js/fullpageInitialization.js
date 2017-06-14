$(function() {
  $(document).ready(function() {
		$('#fullpage').fullpage({
			afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {
				var content = $(this);
				if ($(this).data().loadedcontent) return;
        if ($(this).data().page === "/portfolio.php") {
          $('.cases-btn').click();
          return;
        }
					$.ajax({
						url: $(this).data().page,
						type: 'post',
						dataType: 'html',
						success: function(data) {
							var htmlData = $.parseHTML(data);
							var htmlPiece = $(htmlData).filter('#contentValues')
							content.html(htmlData);
							console.log(htmlData)
						},
						error: function(e) {
							console.log('ERROR', e);
						},
						complete: function() {
              content.data().loadedcontent = true;
							$.getScript("/js/script.js", function() {});
						}
					});
			}
		});
	});
});