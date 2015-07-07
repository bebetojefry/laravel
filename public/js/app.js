$(document).ready(function(){
	jQuery.validator.setDefaults({
		debug: false,
		success: "valid"
	});
	$("#frmUrlShortner").validate({
		rules: {
		  longUrl: {
			required: true,
			url: true
		  }
		}
	});
	$('#frmUrlShortner').on('submit', function(e){
		$.ajax({
			url: $(this).prop('action'),
			type: "POST",
			data: $(this).serialize(),
			success: function(url){
				$('#short_url_cont').html('<a href="'+url+'">'+url+'</a>');
			}
		});
		return false;
	});
});