<?php 
include_once('M/Model.php');
class MList extends Model{
	public function list(){
		$sql='SELECT * FROM newss';
		$db='news';
		$ans=MList::ConnectWhile($sql,$db);
		return $ans;
	}
}
?>