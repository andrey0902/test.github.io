<?php



$db= new Create(Core::$DB_HOST,Core::$DB_LOGIN,Core::$DB_PASS,Core::$DB_NAME);

if(in_array(@$_GET['countri_id'], array('lang','cities','countries'))){
	if(isset($_POST['ok'],$_POST['count'])){
		

	$db->update($_GET['countri_id'],$_POST['count'],$_GET['cities']);
	header("Location: /edit/".$_GET['countri_id']);
	exit();
}
}

if($_GET['countries']=='cities'){
	$row=$db->get_city();
}elseif($_GET['countries']=='lang'){
		$row=$db->get_lang1();
if(isset($_POST['ok'],$_POST['count'])){
	$db->update($_POST['count'],$_GET['countri_id']);
	header("Location: /edit/lang");
	exit();
}
}elseif($_GET['countries']=='countries'){
	$row=$db->get_countries();
if(isset($_POST['ok'],$_POST['count'])){
	$db->update($_POST['count'],$_GET['countri_id']);
	header("Location: /edit/countries");
	exit();
}
}

if($_GET['countries']=='change'){
	if($_GET['countri_id']=='lang'){
		$count=$_GET['countri_id'];
		$id=$_GET['cities'];
		$name_id='lang_id';
	}elseif($_GET['countri_id']=='cities'){
		$count=$_GET['countri_id'];
		$id=$_GET['cities'];
		$name_id='cities_id';
	}elseif($_GET['countri_id']=='countries'){
		$count=$_GET['countri_id'];
		$id=$_GET['cities'];
		$name_id='countries_id';
	}
		
	$row=$db->get_tada($count,$name_id,$id);
	$p=$row->fetch_array(MYSQLI_ASSOC);
}
if(isset($_SESSION['info'])){
	$info=$_SESSION['info'];
	unset($_SESSION['info']);
}