<?php 
include_once('M/Model.php');
class Mregis extends Model{
	public function regis($log,$pass){
		$log=trim($log);
		$pass=trim($pass);
		$password=password_hash($pass,PASSWORD_DEFAULT);
		$db='user';
		$sql='SELECT * FROM user WHERE login="'.$log.'"';
		$ans=Mregis::Connect($sql,$db);
		$ans=mysqli_fetch_assoc($ans);
		if($ans){
			echo"Login id already in using!";
		}else{
		$sql='INSERT INTO user(login,password) VALUES("'.$log.'","'.$password.'")';
		$ans=Mregis::Connect($sql,$db);
			if($ans){
				return $ans;
			}
		}	
	}
}
?>