<?php 
class Model{
	static function Connect($sql,$DB){
		$host='localhost';
		$user='root';
		$pass='';
		$connection=mysqli_connect($host,$user,$pass,$DB)or die();
		$query=mysqli_query($connection,$sql);
		if($query){
		return $query;
		}else{$query=false;}
	}
	static function ConnectWhile($sql,$DB){
		$host='localhost';
		$user='root';
		$pass='';
		$connection=mysqli_connect($host,$user,$pass,$DB)or die();
		$query=mysqli_query($connection,$sql);
		if($query){
		$ans=[];
		while($answer=mysqli_fetch_assoc($query)){
			$ans[]=$answer;
		}return $ans;
	}
}
}
?>