<?php 
include_once('M/Model.php');
class Mchange extends Model{
	public function changeshow($id){
		$db='news';
		$sql='SELECT * FROM newss WHERE id="'.$id.'"';
		$ans = Mchange::ConnectWhile($sql,$db);
		return $ans;
	}
	public function change($sql){
		$db='news';
		$connect=Mchange::Connect($sql,$db);
        return $connect;
	}
}
?>