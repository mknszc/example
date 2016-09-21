$(document).ready(function() {
	$('#loginForm').bootstrapValidator({
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
		fields: {
			username: {
				validators: { 
					stringLength: {
						min: 0, 
						max:30,
						message: 'Lütfen 0-30 Karakter Giriniz'
					},
					notEmpty: {
						message: 'Lütfen Gsm  veya Email Bilgilerini Giriniz'
					}
				}
			},
			password: {
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
				url: "http://localhost/example/login/run",
				data:  $('#loginForm').serializeArray(),
				success : function(data){
					if (data == 0) {
						window.location = 'http://localhost/example/dashboard';
					}
					else if(data == 1) {
						$('#message').text('Böyle Bir Kullanıcı Kaydı Bulunmamaktadır').show();
					}
					else if(data == 2) {
						$('#message').text('Lütfen Bilgilerinizi Eksizsiz Giriniz').show();
					}
				
				}
			});
		}
	});
}); 




  