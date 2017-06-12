$(function() {
  $(document).ready(function() {
		$('#fullpage').fullpage({
			afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {
				//console.log('anchorLink--->', anchorLink, 'index--->', index, 'slideAnchorLink-->', slideAnchor, 'index--->', slideIndex);
				//console.log('>>', $(this)[0], '<<')
				console.log('>>', $(this).data().loadedcontent, '<<')
				console.log('>>', $(this).data(), '<<DATA')
				var content = $(this);
				if($(this).data().loadedcontent) return;//{
					console.log($(this).data().page, '<<--')
					$.ajax({
						url: $(this).data().page,
						type: 'post',
						dataType: 'html',
						success: function(data) {
							var htmlData = $.parseHTML(data);
							var htmlPiece = $(htmlData).filter('#contentValues')
							content.html(htmlPiece);
							console.log(htmlPiece)
						},
						error: function() {
							console.log('ERROR');
						},
						complete: function() {
							console.log('complete')
              content.data().loadedcontent = true;
							$.getScript("/js/script.js", function() {
							});
						}
					});
				//}
			}
		});
	});
});