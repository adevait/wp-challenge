jQuery(document).ready(function () {
    
	
	$('#contact-form button').click(function(e){
		e.preventDefault();
		$('form#contact-form textarea').find('.succeed').remove();
		var has_error = 0;
		$('#contact-form input').each(function(){
			if($(this).val() == ''){
				if(!$(this).parent().find('.error').length){
					$(this).parent().append('<span class="error">This field is required!</span>');
				}
				has_error = 1;
			}else{
				$(this).parent().find('.error').remove();
			}
		});
		
		if($('#contact-form textarea').val() == ''){
			if(!$(this).parent().find('.error').length){
				$('#contact-form textarea').parent().append('<span class="error">This field is required!</span>');
			}
			has_error = 1;
		}else{
			$('#contact-form textarea').parent().find('.error').remove();
		}
		
		
		if(has_error == 1) return;
		
		var form_data = $('#contact-form').serialize();
		
		$.ajax({
			type : "POST",
			url : "/wp-admin/admin-ajax.php",
			data : {
				action: "contact_form",
				'form_data':form_data
			},
			dataType : "json",
			success: function(response) {
				$('form#contact-form textarea').parent().append('<span class="succeed">Contact saved!</span>');
			}
		});   
	});
	 
	
});