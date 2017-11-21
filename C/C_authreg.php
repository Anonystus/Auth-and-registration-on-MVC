<?php
delete_autoload();
class authreg{
	public function login(){
		if(!$_SESSION['auth']){
		include_once('M/M_login.php');
		include_once('auth_reg/auth.php');
		include_once('actionforms/login.html');
		}
	}
	public function register(){
		if(!$_SESSION['auth']){
			include_once('M/M_regis.php');
			include_once('auth_reg/reg.php');
			include_once('actionforms/regis.html');
		}
	}
}
function delete_autoload(){
$functions = spl_autoload_functions();
foreach($functions as $function){
spl_autoload_unregister($function);}}
?>