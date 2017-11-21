<?php 
include_once('M/Model.php');
class MListid extends Model{
	public function listid($id){
		$sql='SELECT * FROM newss WHERE id = "'.$id.'"';
		$db='news';
		$ans=MListid::Connect($sql,$db);
		$ans=mysqli_fetch_assoc($ans);
		return $ans;
	}
}
?>