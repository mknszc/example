<?php
require 'config/paths.php';
require 'config/database.php';
require 'util/Auth.php';
require 'libs/Global.php';


function __autoload($class) {
	require LIBS.$class.'.php';
}

$bootstrap = new Bootstrap();
$bootstrap->init();
 
