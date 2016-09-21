<div class="page-header ">
<div style="text-align: center;">
    <h2>Ödeme Sayfası</h2><br>
	</div>
</div>
<div class="container">
    	<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Kart Bilgileri">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-credit-card"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Sipariş Detay">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Durum Bilgisi">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <form role="form" id="defaultForm">
				<div class="tab-content">
					<div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
							<div class="step_21">
								<h3 class="text-center">Kredi Kart Bilgileri</h3><hr>
								<div class="col-lg-6">
								<div class="card-wrapper"></div>	
								</div>	
									<div class="row">
									<div class="col-lg-3">
										<div class="form-group">
											<label class=" control-label">Kart Kullanıcısının Adı</label>
												<input type="text" class="form-control" id="firstname" name="firstname" autocomplete="off" placeholder="Adını Giriniz"/>
										</div>
									</div>							
									<div class="col-lg-3">
										<div class="form-group">
											<label class=" control-label">Kart Kullanıcısının Soyadı</label>
												<input type="text" class="form-control" id="lastname" name="lastname" autocomplete="off" placeholder="Soyadını Giriniz"/>
										</div>
									</div>
												
							
									<div class="col-lg-6">
										<div class="form-group">
											<label class=" control-label">Kart Numarası</label>
												<input type="text"  class="form-control" id="cardHolder" name="number" maxlength="20" placeholder="Kart Numarasını Giriniz">
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label class=" control-label">Son Kullanım Tarihi</label>
												<input type="text" class="form-control" id="expiry" name="expiry" class="jp-card-invalid" placeholder="MM / YY"/>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label class=" control-label">CVV</label>
												<input type="text" id="cvv" class="form-control"  name="cvc" maxlength="3" placeholder="CVV"/>		
										</div>
									</div>									
								</div>
							</div>
							<div class="step_21">	
								<ul class="nav nav-tabs-custom">
									<li class="nav  col-lg-4  col-xs-4 text-center active" ><a href="#A" data-toggle="tab">Ödeme Türü</a></li>
									<li class="nav col-lg-4 col-xs-4 text-center"><a href="#B" data-toggle="tab">Fatura Bilgileri</a></li>
									<li class="nav col-lg-4 col-xs-4 text-center"><a href="#C" data-toggle="tab">Ödeme Talimatı Ver</a></li>
								</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane fade in active" id="A">
									<div class="step33">
										<h2 class="text-center"><h3  class="text-center">(Tüm kredi kartları ve banka kartları)</h3></h2><hr>
										<table id="table" class="table table-bordered">
											<thead>
												<tr>
													<th> Taksit Miktarı</th>
													<th data-field="name">Faiz oranı</th>
													<th data-field="name">Taksit Tutarı</th>
													<th data-field="starts">Toplam Tutar</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td> 2 <input type="radio" name="radioGroup" id="check"></td>
													<td> % 2.343</td>
													<td>250 TL</td>
													<td>500 TL</td>
												</tr>
												<tr>
													<td> 3 <input type="radio" name="radioGroup" id="check" ></td>
													<td>% 3.234</td>
													<td>250 TL</td>
													<td>750 TL</td>
												</tr>
												<tr>
													<td> 4 <input type="radio" name="radioGroup" id="check"></td>
													<td>% 4.546</td>
													<td>300 TL</td>
													<td>1200 TL</td>
												</tr>
											</tbody>
										</table>
										<div class = "checkbox">
										  <label><input type = "radio" id="check" name="radioGroup" checked> &nbsp;&nbsp; Peşin Öde  999 TL</label>
										</div>
									</div>
								</div>
									 
								<div class="tab-pane fade" id="B">
									<div class="step33">
										<h2 class="text-center"><h3  class="text-center">Fatura Bilgilerini Düzenle</h3></h2><hr>
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label class=" control-label">Ad</label>
														<input type="text" class="form-control" id="fname" name="fname" autocomplete="off" placeholder=" Adını Giriniz"/>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label class=" control-label">Soyad</label>
														<input type="text" class="form-control" id="flastname" name="flastname" autocomplete="off" placeholder="Soyadını Giriniz"/>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label class=" control-label">Eposta</label>
														<input type="email"  class="form-control" id="femail" name="femail" placeholder="Email Giriniz">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label class=" control-label">Gsm</label>
														<input type="text" class="form-control" id="fgsm" name="fgsm"   placeholder="555 555 55 55"/>		
												</div>
											</div>
										</div>
										<div class="row">										
											<div class="col-lg-6">
												<div class="form-group">
													<label class=" control-label">TC Kimlik Numarası</label>
														<input type="number"  class="form-control" id="ftc" name="ftc" maxlength="20" placeholder="TC Kimlik Numarası Giriniz">
												</div>
											</div>									
											<div class="col-lg-6">
												<div class="form-group">
													<label class=" control-label">Vergi Kimlik Numarası</label>
														<input type="number" class="form-control" id="fvkn" name="fvkn"  placeholder="Vergi Kimlik Numarası Giriniz"/>		
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-2">
												<div class="form-group">
													<label class=" control-label">İl</label>
														<select class="selectpicker">
														  <option>--- İl Seçiniz ---</option>
														  <option>İSTANBUL</option>
														</select>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<label class=" control-label">İlçe</label>
													<select class="selectpicker">
														 <option>--- İlçe Seçiniz ---</option>
														 <option>ADALAR</option>
														 <option>ARNAVUTKÖY</option>
														 <option>ATAŞEHİR</option>
														 <option>AVCILAR</option>
														 <option>BAĞCILAR</option>
														 <option>BAHÇELİEVLER</option>
														 <option>BAKIRKÖY</option>
														 <option>BAŞAKŞEHİR</option>
														 <option>BAYRAMPAŞA</option>
														 <option>BEŞİKTAŞ</option>
														 <option>BEYKOZ</option>
														 <option>BEYLİKDÜZÜ</option>
														 <option>BEYOĞLU</option>
														 <option>BÜYÜKÇEKMECE</option>
														 <option>ÇATALCA</option>
														 <option>ÇEKMEKÖY</option>
														 <option>ESENLER</option>
														 <option>ESENYURT</option>
														 <option>EYÜP</option>
														 <option>FATİH</option>
														 <option>GAZİOSMANPAŞA</option>
														 <option>GÜNGÖREN</option>
														 <option>KADIKÖY</option>
														 <option>KAĞITHANE</option>
														 <option>KARTAL</option>
														 <option>KÜÇÜKÇEKMECE</option>
														 <option>MALTEPE</option>
														 <option>PENDİK</option>
														 <option>SANCAKTEPE</option>
														 <option>SARIYER</option>
														 <option>SİLİVRİ</option>
														 <option>SULTANBEYLİ</option>
														 <option>SULTANGAZİ</option>
														 <option>ŞİLE</option>
														 <option>ŞİŞLİ</option>
														 <option>TUZLA</option>
														 <option>ÜMRANİYE</option>
														 <option>ÜSKÜDAR</option>
														 <option>ZEYTİNBURNU</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label class=" control-label">Posta Kodu</label>
														<input type="text" class="form-control" id="fvkn" name="fgsm"  placeholder="Vergi Kimlik Numarası Giriniz"/>		
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label class=" control-label">Adres</label>
														<textarea class="form-control" id="fvkn" name="fgsm"  placeholder="Vergi Kimlik Numarası Giriniz"/>	</textarea>	
												</div>
											</div>
										</div>
											
									</div>
							
										

								
								</div>
								<div class="tab-pane fade" id="C">
									<div class="step33">
										<h2 class="text-center"><h3  class="text-center">Aylık Paket Yenileme</h3></h2><hr>
										<h4  class="text-center"  style=" color:#0099cc">Her Ay Paket Alma Derdine Son. Otomatik Ödeme Talimatı Verir Gibi Paketiniz Bittiğinde Yenilensin İstiyorsanız Lütfen <strong style="color:black;"> Paketim Otomatik Yenilensin </strong> Alanını İşaretleyiniz. </h4>
										<center>
											<input class="text-center" type="checkbox" name="" id="check" checked> <strong><h3>Paketim Otomatik Yenilensin</h3></strong>
										</center>
									</div>
								</div>
							</div>
							</div>
						</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button"  id = "SaveAndGo" class="btn btn-primary next-step">Kaydet ve Devam Et <span class="glyphicon glyphicon-circle-arrow-right"></span></button></li>
                        </ul>	 
                    </div>
                    <div class="tab-pane " role="tabpanel" id="step2">
                        <div class="step2">
                            <div class="step_21">
                                <div class="row">
                                  <div class="container">
										<div class="row">
											<div class="col-xs-12">
												<div class="text-center">
													<h2>Sipariş Detay <h4>Ref:#33221</h4></h2>
												</div>
												<hr>
												<div class="row">
													<div class="col-xs-12 col-md-4 col-lg-4 pull-left">
														<div class="panel panel-default height">
															<div class="panel-heading">Fatura Detayları</div>
															<div class="panel-body">
																<span id="bill-name"><strong>Ad :</strong> Özcan ÇAMOĞLU<br></span>
																<span id="bill-gsm"><strong>Gsm :</strong> 5314911396<br></span>
																<span id="bill-eposta"><strong>E-posta :</strong> ozcan.camoglu@gmail.com<br></span>
																<span id="bill-address"><strong>Adres :</strong> İkitelli Osb Mah. <br>
																YTÜ İkitelli Teknopark Sok. <br>
																Dış Kapı No:1/Z18  Başakşehir – İstanbul/Türkiye<br></span>			
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-md-4 col-lg-4">
														<div class="panel panel-default height">
															<div class="panel-heading">Kart Detayları</div>
															<div class="panel-body">
																<span id="card-name"><strong>Kart:</strong> Visa<br></span>
																<span id="card-number"><strong>Kart Numarası:</strong> ***** 332<br></span>
																<span id="card-expiration-date"><strong>SKT Tarihi:</strong> 09/2020<br></span>
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-md-4 col-lg-4">
														<div class="panel panel-default height">
															<div class="panel-heading">Sipariş Detayları</div>
															<div class="panel-body">
																<strong>Ürün:</strong> ADR lite + ADR FULL<br>
																<strong>Kullanım Süresi:</strong> 6 Ay<br>
																<strong>Tarih :</strong> 15 Temmuz 2015<br>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h3 class="text-center"><strong>Sipariş Özeti</strong></h3>
													</div>
													<div class="panel-body">
														<div class="table-responsive">
															<table class="table table-condensed">
																<thead>
																	<tr>
																		<td><strong>Ürün Adı</strong></td>
																		<td class="text-center"><strong>Adet</strong></td>
																		<td class="text-center"><strong>Süresi</strong></td>
																		<td class="text-right"><strong>Fiyatı</strong></td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td> ADR lite + ADR FULL</td>
																		<td class="text-center">1</td>
																		<td class="text-center">6 ay</td>
																		<td class="text-right">999 TL</td>
																	</tr>
											
																	<tr>
																		<td class="highrow"></td>
																		<td class="highrow"></td>
																		<td class="highrow text-center"><strong>Ara Toplam</strong></td>
																		<td class="highrow text-right">999 TL</td>
																	</tr>
																	<tr>
																		<td class="emptyrow"></td>
																		<td class="emptyrow"></td>
																		<td class="emptyrow text-center"><strong>KDV (%15)</strong></td>
																		<td class="emptyrow text-right">20 TL</td>
																	</tr>
																	<tr>
																		<td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
																		<td class="emptyrow"></td>
																		<td class="emptyrow text-center"><strong>Toplam</strong></td>
																		<td class="emptyrow text-right">119 TL</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step"><span class="glyphicon glyphicon-arrow-left"></span> Önceki</button></li>
                            <li><button type="button" class="btn btn-primary next-step"> Onayla <span class="glyphicon glyphicon-ok"></span></button></li>
                        </ul>
                    </div>
                       <div class="tab-pane " role="tabpanel" id="step3">
					    <div class="step3">
							<div class="step_21">
								<h2 class="text-center">Ödeme Bilgisi</h2>
									<hr>									
								<div class = "text-center">
									<div class = "text-center" style="padding:20px;">
										<div id="wait" >
											<i class="fa fa-refresh fa-spin fa-5x fa-fw" aria-hidden="true"></i>
											<h2>Lütfen Bekleyiniz</h2>		
										</div>
										<div id="ok"  style="display:none;">
											<i class="fa fa-thumbs-o-up  fa-5x fa-fw" aria-hidden="true" ></i>
											<h2 id="successMessage" >Sn. <strong><?php echo $MemberName.' '.$MemberSurname; ?></strong> Ödeme İşleminiz Başarı İle Gerçekleşmiştir</h2>
											<h1  id="thank-you" >Teşekkür Ederiz </h1>
										</div>
										<div id="error" style="display:none;">
											<i class="fa fa-thumbs-o-down  fa-5x fa-fw" aria-hidden="true" ></i>
											<h2 id="errorMessage">Sn. <strong><?php echo $MemberName.' '.$MemberSurname; ?></strong> Ödeme İşleminiz Gerçekleşmemiştir. Lütfen <strong>Kart Bilgilerinizi</strong> Doğru Girdiğinizden Emin Olunuz</h2>	<br>
											<center><button type="button" class="btn btn-primary" onclick="myFunction()" >Tekrar Dene</button></center>
										</div>
									</div> 
								</div>
							</div>	  
                        </div>
                    </div>
                </div>
				<div class="clearfix"></div>
			</form>
        </div>
         
    </div> 
</section>
</div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
//        live: 'disabled',
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
						min: 0,
						max:16,
						message: 'Lütfen 16 Haneli Kart Numarasını Giriniz'
					},
					notEmpty: {
						message: 'Lütfen 16 Haneli Kart Numarasını Giriniz'
					},
					creditCard: {
                        message: 'Geçerli Bir Kart Numarası Giriniz'
                    }
				}
			},
	
			cvc: {
				validators: {
					stringLength: {
						min: 3,
						max:3,
						message:'Lütfen 3  Haneli CVC Kodunu Giriniz'
					},
					notEmpty: {
						message: 'Lütfen 3  Haneli CVC Kodunu Giriniz'
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
$('#card-name').text('5sdasdasdasdfdxdfgdfgdf');
$("#SaveAndGo").click(function () {
        var validator = $('#defaultForm').data('bootstrapValidator');
        validator.validate();
        if (validator.isValid()) {
			//alert("2");
			var $active = $('.wizard .nav-tabs li.active');
			$active.next().removeClass('disabled');
			nextTab($active);
			$('.wizard .nav-tabs li.active').css("color", "green");
	
			var bla = $('#firstname').val();
			
        }
		else {
			alert("5");
		}
    });
</script>

<script>
/* Card.js plugin by Jesse Pollak. https://github.com/jessepollak/card */

$('#defaultForm').card({
    container: '.card-wrapper',
    width: 300,

    formSelectors: {
        nameInput: 'input[name="firstname"], input[name="lastname"]'
    }
});
$('.jp-card-name').text("AD SOYAD");
</script>
<script>
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

      //  var $active = $('.wizard .nav-tabs li.active');
      //  $active.next().removeClass('disabled');
      //  nextTab($active);

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

$(document).ready(function()
{
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
</script>
<style>
.jp-card .jp-card-front, .jp-card .jp-card-back {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transition: all 400ms linear;
    -moz-transition: all 400ms linear;
    transition: all 400ms linear;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 5px;

    left: 0;
    overflow: hidden;
    border-radius: 10px;
    background: #09c;
	
}
.jp-card-back .jp-card-shiny {
    width: 50px;
    height: 35px;
    border-radius: 5px;
    background: white;
    position: relative;
}

ckground: #fff;
}
.jp-card.jp-card-identified {
    box-shadow: 0 0 20px rgb(255, 255, 255);
}
</style>
</body>
</html>

