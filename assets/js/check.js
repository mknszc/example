$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstname: {
				validators: {
					stringLength: {
						min: 2,
						message: 'Lütfen Adınızı  Eksiksiz Giriniz'
					},
					notEmpty: {
						message: 'Lütfen Adınızı Giriniz'
					}
				}
			},
			lastname: {
				validators: {
					stringLength: {
						min: 2,
						message: 'Lütfen Soyadınızı  Eksiksiz Giriniz'
					},
					notEmpty: {
						message: 'Lütfen Soyadınızı Giriniz'
					}
				}
			},
			number: {
				validators: {
					stringLength: {
						min: 18,
						max:19,
						message: 'Lütfen 16 Haneli Kart Numarasını Giriniz'
					},
					notEmpty: {
						message: 'Lütfen 16 Haneli Kart Numarasını Giriniz'
					}
				}
			},
			expiry: {
					validators: {
						stringLength: {
							min: 9,
							max:9,
							message: 'Lütfen Geçerli Bir Tarih Giriniz örn: 11 / 2023'
						},
						notEmpty: {
							message: 'Lütfen Geçerli Bir Tarih Giriniz örn: 11 / 2023'
						}
					}
			},
			cvc: {
				validators: {
					stringLength: {
						min: 3,
						max:3,
						message:'Lütfen 3  Haneli CVV Kodunu Giriniz'
					},
					notEmpty: {
						message: 'Lütfen 3  Haneli CVV Kodunu Giriniz'
					}
				}
			},
			fname: {
				validators: {
					stringLength: {
						min: 2,
						message: 'Lütfen Adınızı Eksiksiz Giriniz'
					},
					notEmpty: {
						message: 'Lütfen Adınızı Giriniz'
					}
				}
			},
			flastname: {
				validators: {
					stringLength: {
						min: 2,
						message: 'Lütfen Soyadınızı Eksiksiz Giriniz'
					},
					notEmpty: {
						message: 'Lütfen Soyadınızı Giriniz'
					}
				}
			},
			femail: {
				validators: {
					notEmpty: {
						message: 'Lütfen E-Mail Adresinizi Giriniz'
					},
					emailAddress: {
						message: 'Lütfen Geçerli Bir E-Mail Adresi Giriniz'
					}
				}
			},
			fgsm: {
				validators: {
					notEmpty: {
						message: 'Lütfen Telefon Numarasınızı Giriniz'
					},
					regexp: {
						regexp:/^[5]{1}[0-9]{2}[0-9]{3}[0-9]{4}$/i,
						message: 'Lütfen Geçerli Bir Telefon Numarası Giriniz'
					}
				}
			}
        }
    });
});

$("#SaveAndGo").click(function () {
        var validator = $('#defaultForm').data('bootstrapValidator');
        validator.validate();
		
        if (validator.isValid()) {
			var $active = $('.wizard .nav-tabs li.active');
			$active.next().removeClass('disabled');
			$('#confirm').prop('disabled', false);
			nextTab($active);
			
			$('.wizard .nav-tabs li.active').css("color", "green");
			$('#card-name').text(' '+ $('#firstname').val()+' '+ $('#lastname').val());
			$('#card-number').text(' ' + ($('#cardHolder').val()).substr(0, 4)+' **** **** '+ ($('#cardHolder').val()).substr(15));
			$('#card-cvc').text(' ' + $('#cvc').val());
			$('#card-expiration-date').text(' ' + $('#expiry').val());

			
			$('#bill-name').text(' '+ $('#fname').val()+' '+ $('#flastname').val());
			$('#bill-eposta').text(' '+ $('#femail').val());
			$('#bill-gsm').text(' '+ $('#fgsm').val());
			$('#bill-tc').text(' '+ $('#ftc').val());
			$('#bill-vkn').text(' '+ $('#fvkn').val());
			$('#bill-address').text(' '+ $('#faddress').val()+' '+ $('#province').val()+' - '+ $('#district').val()+ ' ' + $('#fpostal-code').val()  );
			
        }
		else {
			//alert(2);
		}
    });

	
$('#defaultForm').card({
    container: '.card-wrapper',
    width: 300,
    formSelectors: {
        nameInput: 'input[name="firstname"], input[name="lastname"]'
    }
});
$('.jp-card-name').text("AD SOYAD");


$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
		var $target = $(e.target);
		if ($target.parent().hasClass('disabled')) {
            return false;
		}
    });


    $(".prev-step").click(function (e) {
       var $active = $('.wizard .nav-tabs li.active');
       prevTab($active);
    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


//according menu

$(document).ready(function() {
    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({});
	
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	
	return false;
});

  $("#confirm").click(function (e) {
		$("#ok").hide();	
		$("#error").hide();
		$("#wait").show();
		var $active = $('.wizard .nav-tabs li.active');
		$active.next().removeClass('disabled');
		nextTab($active);
		//ajax;
		var data = $('#defaultForm').serializeArray();

		$.ajax({
			type: "POST",
			url: "../class/alu-sample.php",
			data: $('#defaultForm').serializeArray(),
			success : function(data) {
				if (data == 1) {
					$("#wait").hide();
					$("#error").show();
				}
				else if(data == 0) {
					$("#wait").hide();
					$("#ok").show();
				}
				else {
					$(location).attr('href', data);
				}
				 $("#adim1, #adim2, #adim3").removeClass("active, disabled");
				 $("#adim1, #adim2, #adim3").addClass(" disabled"); 
			}
        });

    });
	
function myFunction() {
    $("#step1, #adim1").removeClass("disabled");
	$("#step3,#adim3").removeClass("active");
					
	$("#step1,#adim1").addClass("active"); 
	$("#step3,#adim3").addClass("disabled");	
}

