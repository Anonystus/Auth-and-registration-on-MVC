<?php
delete_autoload();
class news{
	public function index(){
		include_once('V/V_index.php');
	}
	public function list(){
		include_once('M/M_list.php');
		$obj=new MList();
		$ans=$obj->list();
		if(!empty($ans)){
			include_once('V/V_list.php');
		}
	}
	public function listid($id){
		include_once('M/M_listid.php');
		$id=(int) $id;
		$obj=new MListid();
		$answer=$obj->listid($id);
		if(!empty($answer)){
			$title=$answer['title'];
			$id=$answer['id'];
			$content=$answer['content'];
			include_once('V/V_listid.php');
		}
	}
	public function change($id){
		include_once('M/M_change.php');
		$obj=new Mchange();
		$ans = $obj->changeshow($id);
		if($ans){
		foreach($ans as $k){
	    $title=$k['title'];
		$content=$k['content'];}
		include_once('actionforms/change.html');}
		if(isset($_POST['submit'])){
			$title=$_POST['title'];
			$content=$_POST['content'];
		    $sql='UPDATE newss SET title="'.$title.'",content="'.$content.'" WHERE id="'.$id.'"';
			$obj=new Mchange();
			$obj->change($sql);
            echo "<-Article succesive changed here's link"; 
		}
	}
}
function delete_autoload(){
$functions = spl_autoload_functions();
foreach($functions as $function){
spl_autoload_unregister($function);}}
?>