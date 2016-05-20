<?php 
function wtf($array, $stop = false) {
	echo '<pre>'.print_r($array,1).'</pre>';
	if(!$stop) {
		exit();
	}
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
 
/* Функция обрабатывающая переменную или(масив) и обрезая лишнии пробелы в начале текста и в конце*/
function trimAll($el){
	if(!is_array($el)){
		$el=trim($el);
	}else{
	$el=array_map('trimAll',$el);
}
    return $el;
}
/* конец Функции обрабатывающей переменную или(масив)  и обрезая лишнии пробелы в начале текста и в конце*/
/* Функция обрабатывающая переменную или(масив) в целочисленое число*/
function intAll($el){
	if(!is_array($el)){
		$el=(int)$el;
	}else{
	$el=array_map('intAll',$el);
}
    return $el;
}

/* Функция обрабатывающая переменную или(масив) в дробное число*/
function floatAll($el){
	if(!is_array($el)){
		$el=(float)$el;
	}else{
	$el=array_map('floatAll',$el);
}
    return $el;
}


/* Функция обрабатывающая переменную или(масив) экранируя перед записью в БД*/
function es($el){
	if(!is_array($el)){
		global $link;
		$el= mysqli_real_escape_string($link,$el);
	}else{
	$el=array_map('es',$el);
}
    return $el;
}
/* Функция обрабатывающая переменную или(масив) экранируя перед выводом на экран*/

function hc($el){
	if(!is_array($el)){
		$el= htmlspecialchars($el);
	}else{
	$el=array_map('hc',$el);
}
    return $el;
}
/* Функция обрабатывающая вызов класса при вызове если он не был подключен через инклюд*/

    function __autoload($class){
	include './libs/class_'.$class.'.php';
}
/*функция хеширования пароля на сайте*/
function myHash($var){
	$salt='AbCd';
	$salt1='12BvR';
	$var=crypt(md5($var.$salt),$salt1);
	return $var;
}