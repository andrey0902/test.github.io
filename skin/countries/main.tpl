

<form action="" id="form" method='post'>
		
Выберете страну  <select name="countri_id">
<?php


 while($p=$row->fetch_array(MYSQLI_ASSOC)){
     echo '<option value='.$p['countries_id'].'>'.$p['name'].'</option>';

	 }?>
</select>
 
 <br><input type='submit' name='sub' value='Отправить'>
</form>


