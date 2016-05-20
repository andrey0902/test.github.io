<?php
if(isset($_POST['sub'],$_POST['countri_id'])){
	header("Location: countries/".$_POST['countri_id']);
	exit();
}
$db= new DB(Core::$DB_HOST,Core::$DB_LOGIN,Core::$DB_PASS,Core::$DB_NAME);

$row=$db->get_countries();



/*
while($p=$row->fetch_array(MYSQLI_ASSOC)){

}*/



/*
echo "<form action='' method='post'>";	
		
echo "Выбере страну : ". '<select name="countri_id">';
while($p=$row->fetch_array(MYSQLI_ASSOC)){
     echo '<option value="'.$p['id'].'">'.$p['name'].'</option>';

	 }
echo '</select>';
 
 echo "<br><input type='submit' name='sub' value='Отправить'>";
echo "</form>";*/