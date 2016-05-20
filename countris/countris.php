<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
session_start();

if(isset($_GET['countri_id'])){
	
	$res=q("
		SELECT `id`,`name`
		FROM `countries`
		WHERE `id`= '".$_GET['countri_id']."'
		LIMIT 1
		");
	
	
	/*header("Location: /countris.php");
		exit();*/
		echo 'da';
		$row1=mysqli_fetch_assoc($res);
echo $row1['id']. $row1 ['name'];
}



/* Функция выполняющая запрос в БД*/
function q($query){
	global $link;
	$res=mysqli_query($link,$query);
	if($res===false){
		$info=debug_backtrace();
		$errors= '<hr>'."Файл вызвавший ошибку:\n ".
		$info[0]['file']."<br> \n\n"."Линия в которой произошла ошибка:\n\n ".
		$info[0]['line']."\n\n <br>"."Функция вызвавшая ошибка:\n\n ".
		$info[0]['function']."<br> \n\n"."Запрос:\n ".$query."<br>\n\n"."\n\n<br>".mysqli_error($link)."\n Дата:".date("Y-M-D H:I:s");
	// Отправить увидомление на почту
	file_put_contents('./log/mysql.log',strip_tags($errors)."\n\n",FILE_APPEND);
	echo $errors;
	exit();
	}else{
		return $res;
	}
	}
 /* конец Функции выполняющей запрос в БД*/
 



/*
include_once'./config/config.php';
include_once './libs/defaults2.php';

/* Делаем подключение к БД передаем данные о подключении голин, пароль, имя пользователя, расположение(локальное или на хостинге)
а так же кодировку передаваемых данных
$link=mysqli_connect(Core::$DB_LOCAL,Core::$DB_LOGIN,Core::$DB_PASS,Core::$DB_NAME);
mysqli_set_charset($link,'utf8');
/* завершен блок подключения к БД*/
include_once'./config/config.php';
include_once './variables.php';

$link=mysqli_connect(HOST,DBLOGIN,DBPASS,DBNAME);
mysqli_set_charset($link,'utf8');


$res=q("
		SELECT `id`,`name`
		FROM `countries`
		ORDER BY `id` DESC
		");
		
echo "<form action='countris.php' method='post'>";	
		
echo "Выбере страну : ". '<select name="countri_id">';
while($row=mysqli_fetch_assoc($res))
{
     echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';

	 }
echo '</select>';
 
 echo "<br><input type='submit' name='sub' value='Отправить'>";
echo "</form>";
