<?php 
if(isset($_POST['submit']) and !empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['reset_password'])){
	$login=$_POST['login'];
	$password=$_POST['password'];
	$pass_confirm=$_POST['reset_password'];
	if($password==$pass_confirm){
	$obj=new Mregis;
	$ans=$obj->regis($login,$password);
	if($ans){
		include_once('V/V_regissuccess.php');
	}
	}
}else{echo "Somethink is empty";}
?>