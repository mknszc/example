$(document).ready(function() {
	$('#loginForm').bootstrapValidator({
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
		fields: {
			name: {
				validators: { 
					stringLength: {
						min: 0, 
						max:30,
						message: 'Lütfen 0-30 Karakter Giriniz'
					},
					notEmpty: {
						message: 'Lütfen Adınızı Giriniz'
					}
				}
			},
			surname: {
				validators: { 
					stringLength: {
						min: 0, 
						max:30,
						message: 'Lütfen 0-30 Karakter Giriniz'
					},
					notEmpty: {
						message: 'Lütfen Soyadınızı Giriniz'
					}
				}
			},
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
			username: {
				validators: { 
					stringLength: {
						min: 0, 
						max:30,
						message: 'Lütfen 0-30 Karakter Giriniz'
					},
					notEmpty: {
						message: 'Lütfen Kullanıcı Adınızı Giriniz'
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
				url: "http://localhost/example/register/save",
				data:  $('#loginForm').serializeArray(),
				success : function(data){
					if (data == 0) {
						$('#message').text('Kayıt Başarılı').show();
					}
					else if(data == 1) {
						$('#message').text('Kayıt Başarısız').show();
					}
					else if(data == 2) {
						$('#message').text('Bu email ile kayıtlı kullanıcı mevcut').show();
					}
					else if(data == 3) {
						$('#message').text('Bu kullanıcı adında üye mevcut').show();
					}
				}
			});
		}
	});
}); 


alert($(document).scrollTop());

  