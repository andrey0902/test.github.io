

<form action="" id="form" method='post'>
		
	
<?/*echo $p1."11111111111";
(($p['id']==$p1)?"selected":"")*/

?>
Выбраная страна  <select name="countri_id">
<?php
 while($p=$row->fetch_array(MYSQLI_ASSOC)){
	 if($p['countries_id']==$p1){
	   echo '<option value="'.$p1.'"selected>'.$p['name'].'</option>';
	 }else{/*echo '<option value='.$p['id'].'>'.$p['name'].$p['id'].'</option>';*/}
	 }?>

	 
</select>
 <br>Выбере город &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <select name="cities_id">
<?php
 while($p1=$row1->fetch_array(MYSQLI_ASSOC)){
     echo '<option value='.$p1['cities_id'].'>'.$p1['name'].'</option>';
	 }?>
</select> 
 <br><input type='submit' name='sub' value='Отправить'>
</form>


