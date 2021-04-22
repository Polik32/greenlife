jQuery(document).ready(function($) {
	$("#contact").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/Greenlife/mail.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Message sent</div>';
					$("#fields").hide();
					$("#title").hide();
				}
				else {result = msg;}
				$('#note').html(result);
			}
		});
		return false;
	});
});