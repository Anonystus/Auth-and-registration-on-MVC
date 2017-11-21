<?php 
if(isset($_POST['submitauth'])){
	if(!empty($_POST['loginauth'] and !empty($_POST['passwordauth']))){
		if(!empty($_POST['cookie'])){
			$cookie=1;
		}else{$cookie=0;}
		$login=$_POST['loginauth'];
		$password=$_POST['passwordauth'];
		$login=trim($login);
		$password=trim($password);
		$obj=new MLogin();
		$obj->login($login,$password,$cookie);
	}else{echo "Somethink is empty!";}
}
?>