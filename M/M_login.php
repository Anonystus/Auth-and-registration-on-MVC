<?php 
include_once('M/Model.php');
class MLogin extends Model{
	public function login($login,$password,$cookie){
		$db='user';
		$sql='SELECT * FROM user WHERE login="'.$login.'"';
		$ans=MLogin::Connect($sql,$db);
		$ans=mysqli_fetch_assoc($ans);
		if($ans){
			$login=$ans['login'];
			$pass=$ans['password'];
			if(password_verify($password,$pass)){
				echo "You are succesive loggined!";
			}else{echo "Wrong pass";}
		}
	}
}
?>