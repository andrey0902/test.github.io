<?php
if(isset($_GET['countries'],$_GET['countri_id'])){
	$del= new Delet (Core::$DB_HOST,Core::$DB_LOGIN,Core::$DB_PASS,Core::$DB_NAME);
	
	  $name_id=$_GET['countries']."_id";	
	
	
	$del->del($_GET['countries'],$name_id,$_GET['countri_id']);
	if( $del){
		$_SESSION['info']="Данные были удалены";
		header("Location: /edit/".$_GET['countries']);
	exit();
	}
}