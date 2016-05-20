<?php
if(isset($_POST['sub'],$_POST['countri_id'],$_POST['cities_id'])){
	header("Location: ".$_POST['countri_id']."/cities/".$_POST['cities_id']);
	exit();
}elseif(isset($_POST['sub'],$_POST['countri_id'])){
	header("Location: countries/".$_POST['countri_id']);
	exit();
}
$db= new DB(Core::$DB_HOST,Core::$DB_LOGIN,Core::$DB_PASS,Core::$DB_NAME);

$row=$db->get_countries();




if(isset($_GET['countries'],$_GET['countri_id'])){
		 $p1=(int)$_GET['countries'];
		   if(is_int($p1)&&$p1!=0){
		    }
	      $row1=$db->get_cities($p1);		
	      $id=@$_GET['cities'];	
		  $row2=$db->get_lang($p1);
		}
		elseif(isset($_GET['countries'])){
		  $p1=(int)$_GET['countries'];
		   if(is_int($p1)&&$p1!=0){
		    }
		$row1=$db->get_cities($p1);	
		   }
			
