$(document).ready(function() {
	$('#loginForm').bootstrapValidator({
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
		fields: {
			email: {
				validators: {
					notEmpty: {
						message: 'Lütfen E-Mail Adresinizi Giriniz'
					},
					emailAddress: {
						message: 'Lütfen Geçerli Bir E-Mail Adresi Giriniz'
					}
				}
			},
			check: {
				validators: {
					stringLength: {
						min: 5,
						max: 50,
						message: 'Lütfen 5-50 Karakter Arasında Şifre Giriniz'
					},
					notEmpty: {
						message: 'Lütfen Şifre Giriniz'
					},
					regexp: {
						regexp:/^(?!<([^>]+)>)/ig,
						message: 'Lütfen Şifrenizi Düzgün Giriniz'
					}
					 
				}
			}
		},
		submitHandler: function(validator, form, submitButton) {
			$('#message').hide();
		
			$.ajax({
				type: "POST",  
				url: "http://localhost/example/forget/check",
				data:  $('#loginForm').serializeArray(),
				success : function(data){
					if(data == 1) {
						$("#Email").fadeOut('fast');
						$("#Alert").text("Lütfen Onay Kodunuzu Giriniz");
						$("#Check").fadeIn('slow');
					}
					else {
						alert(data);
					}
				}
			});
		}
	});
}); 




  