<?php

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
