<p>Для создания новых связей выберете все поля</p>
 <p> <? if (isset($info)) {?>
    <h1><?php echo $info;?> </h1>
  <?php }?></p>

  <form action='' method='post'>  
Выберете страну  <select name="countri_id">
<?php


 while($p=$row->fetch_array(MYSQLI_ASSOC)){
     echo '<option value='.$p['countries_id'].'>'.$p['name'].'</option>';

	 }?>
</select>
 <br>Выберете город  &nbsp;   <select name="cities_id">
<?php


 while($p1=$row1->fetch_array(MYSQLI_ASSOC)){
	
     echo '<option value='.$p1['cities_id'].'>'.$p1['name'].'</option>';
	 }?>
</select> 
<br>Выберете язык   &nbsp;&nbsp;  <select name="lang_id">
<?php
while($p2=$row2->fetch_array(MYSQLI_ASSOC)){
echo '<option value='.$p2['lang_id'].'>'.$p2['name'].'</option>';}?><br>
 
 
 
 <br><br><input type='submit' name='sub' value='Отправить'><br>

 
 
 
 
 </form>

<br><br>
  
  
  
  
  
  
  
  
  <p>Для создания новых данных заполните поля</p>
<form action='' method='POST'>
Добавить страну &nbsp;<input type="text" required="required" name="countries"  placeholder="Украина"> 
<input type="submit" name="go" value="Отправить">
</form>
<form action='' method='POST'>
Добавить город &nbsp;&nbsp; <input type='text' required="required" name='cities'placeholder="Запорожье">
<input type="submit" name="goc" value="Отправить">
</form>
<form action='' method='POST'>
Добавить язык &nbsp;&nbsp;&nbsp;  <input type='text' required="required" name='lang' placeholder="Украинский">
<input type="submit" name="gol" value="Отправить">
</form>


