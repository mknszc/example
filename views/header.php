<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
    <link href="<?php echo URL;?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL;?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo URL;?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo URL;?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo URL;?>assets/css/main.css" rel="stylesheet">
<?php
	if(isset($this->css)) {
		foreach ($this->css as $css) {?>
	<link href="<?=URL?>assets/css/<?=$css?>" rel="stylesheet">
<?php
		} 
	}
?>
	<script src="<?php echo URL;?>assets/js/jquery.js"></script>
    <script src="<?php echo URL;?>assets/js/bootstrapvalidator.min.js"></script>
    <script src="<?php echo URL;?>assets/js/bootstrap.min.js"></script>
<?php
	if(isset($this->js)) {
		foreach ($this->js as $js) {?>
	<script src="<?=URL?>assets/js/<?=$js?>"></script>
<?php
		} 
	}
?>
</head>

<body>
<div class="page-loader" style="display:none"><div class="loader"></div></div>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container" style="width:90%">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo INDEXURL;?>">MVC</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<?php 
				Session::init();
				if(Session::get('loggedIn') == true) {
				?>
				<li>
					<a href="<?php echo DASHBOARDURL;?>">Dashboard</a>
				</li>
				<?php
				}
				if (Session::get('role') == 1) { ?>
				<li>
					<a href="<?php echo USERURL;?>">User</a>
				</li>
				<?php
				}
				?>
				<li>
					<a href="<?php echo HELPURL;?>">Help</a>
				</li>
	
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">	
				<?php 
					if (Session::get('loggedIn') == true) {
						echo Session::get('name').' '.Session::get('surname');
					}
					else {
				?>
					Üye
				<?php 
					} 
				?>
					<i class="fa fa-user" ></i><b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
				<?php 
				if(Session::get('loggedIn') == true) {
				?>	
					<li><a href="<?php echo PROFILEURL;?>">Profil</a></li>
					<li><a href="<?php echo PROFILEEDITURL;?>">Profili Düzenle</a></li>
					<li class="divider"></li>
					<li><a href="<?php echo LOGOUTURL;?>">Çıkış Yap</a></li>
					
				<?php
				}
				else {
				?>
					<li><a href="<?php echo LOGINURL;?>">Giriş Yap</a></li>
					<li><a href="<?php echo REGISTERURL;?>">Kayıt Ol</a></li>
				<?php
				}
				?>
				</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

