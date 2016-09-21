<div class="container access-section">
<div class="row">
<section class="login-section section">
		<div class="container ">
			<div class="row ">
				<div class="form-box col-md-offset-0 col-sm-offset-0 xs-offset-12 col-xs-12 col-md-12">     
					<div class="form-box-inner">
						<h3 class="title text-center">Kayıt Sayfası</h3> <br>
						<div class="row">
							<div class="form-container col-xs-12 col-md-5">
								<form role="form" class="login-form"  id="loginForm" method="post" >
									<div class="form-group email">
										<label class="sr-only" for="login-phone">Ad</label>
										<input value="" "id="name" name="name" placeholder="Ad" class="form-control"  type="text">
									</div>
									<div class="form-group email">
										<label class="sr-only" for="login-phone">Soyad</label>
										<input value="" id="surname" name="surname" placeholder="Soyad" class="form-control"  type="text">
									</div>
									<div class="form-group email">
										<label class="sr-only" for="login-phone">Email</label>
										<input value="" id="email" name="email" placeholder="Email" class="form-control"  type="text">
									</div>
									<div class="form-group email">
										<label class="sr-only " for="login-email">Kullanıcı Adı</label>
										<input id="username" name="username" placeholder="Kullanıcı Adı" class="form-control"  type="text">
									</div>
									<div class="form-group password">
										<label class="sr-only" for="login-password">Şifre</label>
										<input id ="password" name="password" placeholder="Şifre" class="form-control"  type="password">
									</div>
									 <p class="forgot-password"></p>
									<button id="loginButton" type="submit" class="btn btn-block btn-cta-primary">KAYIT OL</button>
									<br>							
									<div class="alert alert-danger text-center"  style="display:none; font-size:13px;" role="alert" id="message">Başarısız
									</div>
									 <p class="lead">Üye misin ? <br /><a class="signup-link" href="<?php echo LOGINURL; ?>">Şimdi Giriş Yap</a></p> 
								</form>
							</div>
							<div class="social-btns reg col-md-offset-1 col-sm-offset-0 col-sm-offset-0 col-xs-12 col-md-5">  
								<div class="divider"><span>Ya Da</span></div>                      
								<ul class=" list-unstyled social-login">	
									 <li><button class="facebook-btn btn" onclick="fblogin();return false;" type="button"><i class="fa fa-facebook"></i>FACEBOOK</button></li><br>
									 --- ile kaydol ---
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
</div>