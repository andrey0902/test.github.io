<?php
$db= new Create(Core::$DB_HOST,Core::$DB_LOGIN,Core::$DB_PASS,Core::$DB_NAME);

$row=$db->get_countries();
$row1=$db->get_city();
$row2=$db->get_lang1();
if(isset($_POST['sub'],$_POST['countri_id'],$_POST['cities_id'],$_POST['lang_id'])){
$db->set_connection($_POST['countri_id'],$_POST['cities_id'],$_POST['lang_id']);
$_SESSION['info']='Связи были успешно добавлены';
	header("Location: /create/countries/");
	exit();
}

if(isset($_POST['go'])){
	$count=trimAll($_POST['countries']);
	$res=$db->set_create($count,$c='countries'); 
	
}elseif(isset($_POST['goc'])){
	$city=trimAll($_POST['cities']);
	$res=$db->set_create($city,$c='cities');
}elseif(isset($_POST['gol'])){
	$lang=trimAll($_POST['lang']);
	$res=$db->set_create($lang,$c='lang');
}
if(isset($res)&&$res=='ok'){
	$_SESSION['info']='Данные были успешно добавлены';
	header("Location: /create/countries/");
	exit();
}
	
	
	
	

if(isset($_SESSION['info'])){
	$info=$_SESSION['info'];
	unset($_SESSION['info']);
}
