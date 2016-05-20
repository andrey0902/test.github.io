<?php 
class DB{
	
	public $db;
	public $p;
	static public $mysql;
	
	public function __construct($host,$user,$pass,$db_name){
		
		Self::$mysql= new mysqli($host,$user,$pass,$db_name);
		if(mysqli_connect_errno()){
			echo "Не удалось подключится к Базе Данных";
			exit();
        }
		return Self::$mysql;
		
	}

	public function get_countries(){
		
		$result=Self::$mysql->query(
		"SELECT `countries_id`,`name`
		FROM `countries`
		ORDER BY `countries_id` DESC");
		
			return $result;
		}
		public function get_city(){
			$result=Self::$mysql->query(
		"SELECT `cities_id`,`name`
		FROM `cities`
		ORDER BY `cities_id` DESC");
		
			return $result;
		}
		public function get_lang1(){
			$result=Self::$mysql->query(
		"SELECT `lang_id`,`name`
		FROM `lang`
		ORDER BY `lang_id` DESC");
		
			return $result;
		}
		public function get_cities($id){
			$res_id=Self::$mysql->query(
		"SELECT `cities_id` FROM `countries_cities`WHERE `countries_id`='".$id."'");
	
		$p;
	while($row2=$res_id->fetch_assoc()){
	 	@$p.=$row2['cities_id'].",";
		}
		if(!empty($p)){
			$p=mb_strrchr($p,',',$part=true); 
			
			
				$res_id=Self::$mysql->query(
				"SELECT `name`, `cities_id` 
				FROM `cities` WHERE `cities_id` IN ($p)
				");
	
            return $res_id ;
		}
		}
		
		
		
		
		
		
		public function get_lang($id){
			$res_id=Self::$mysql->query(
		"SELECT `lang_id` FROM `countries_lang_id`WHERE `countries_id`='".$id."'");
	
		$p;
	while($row2=$res_id->fetch_assoc()){
	 	@$p.=$row2['lang_id'].",";
		}
		if(!empty($p)){
			$p=mb_strrchr($p,',',$part=true); 
						
				$res_id1=Self::$mysql->query(
				"SELECT `name`, `lang_id` 
				FROM `lang` WHERE `lang_id` IN ($p)
				");
	Self::$mysql->close();
            return $res_id1 ;
		}
		}
}
	
	class Create extends DB{
	
	public function set_connection($countries,$cities,$lang){
		$id_count=$countries;
		$id_city=$cities;
		$id_lang=$lang;
		Self::$mysql->query(
				"INSERT INTO `countries_cities` SET
				`countries_id` = '".$id_count."',
				`cities_id`    ='".$id_city."'
				");
				Self::$mysql->query(
				"INSERT INTO `countries_lang_id` SET
				`countries_id` = '".$id_count."',
				`lang_id`    ='".$id_lang."'
				");
	Self::$mysql->close();
	return $ok='ok';
		
	}
	
	
	public function set_create($countries,$c){
		
		$res_id=Self::$mysql->query(
				"INSERT INTO `".$c."` SET
				`name`  ='".es($countries)."'
				");
		
		
			Self::$mysql->close();
	return $ok='ok';
	}
	public function get_tada($data,$name_id,$id){
		
		$res_id=Self::$mysql->query(
		"SELECT * FROM `".$data."`WHERE `".$name_id."`='".$id."'");
		
		
			Self::$mysql->close();
	return $res_id;
	}
	
	public function update($name,$mes,$id){
		$res_id=Self::$mysql->query(
		"UPDATE `".$name."` SET
		
		`name`        ='".es($mes)."'
		
		WHERE `".$name."_id`= $id");
		Self::$mysql->close();
	}
	
}	
	
class Delet extends DB{
	

	public function del($name,$name_id,$id){
		$b=Self::$mysql->query(
		"DELETE from `".$name."`
		WHERE `".$name_id."`= '".(int)$id."'
		");
		Self::$mysql->close();
		return $b;
	}
	
	
	
	
}




 
 
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




/* Функция обрабатывающая переменную или(масив) экранируя перед записью в БД*/
function es($el) {
	return DB::$mysql->real_escape_string($el);
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
