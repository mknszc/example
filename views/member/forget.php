<div class="container access-section">
<div class="row">
<section class="login-section  section">
	<div class="container ">
		<div class="row ">
			<div class="form-box  col-sm-offset-0 xs-offset-12 col-xs-12 col-md-12">     
				<div class="form-box-inner">
					<h3 class="title text-center">Şifremi Unuttum</h3>
					<div class="row">
						<div class="form-container col-md-offset-2 col-xs-12 col-md-8">
							<h5 id="Alert" > Lütfen Email Adresinizi Giriniz </h5>
							<form role="form" class="login-form"  id="loginForm"  method="post">              
								<div class="form-group email" id="Email">
									<label class="sr-only" for="login-email">Email</label>
									<input id="email" name="email" placeholder="Email" class="form-control"  type="text">
								</div>
								<div class="form-group password" style="display:none;" id="Check">
									<label class="sr-only" for="login-password">Onay</label>
									<input id="check" name="check" placeholder="Onay Kodu" class="form-control"  type="text">
								</div>
								<button id="loginButton" type="submit" class="btn btn-block btn-cta-primary">GÖNDER</button>
								<br>
								<div class="alert alert-danger text-center"  style="display:none; font-size:13px;" role="alert" id="message">Başarısız
								</div>
								 <p class="lead">Henüz Kayıt Olmadın Mı? <br /><a class="signup-link" href="<?php echo REGISTERURL; ?>">Şimdi Ücretsiz Kaydol</a></p>  
							</form>
						</div>
					</div>		
				</div>  
			</div>  
		</div>  
	</div>  
</section>
</div> 
</div> 