
	<div class="nav">
	  <a href="/edit/countries">Редактировать страны</a>
	  <a href="/edit/lang">Редактировать языки</a>
	</div>

<?if($_GET['countries']=='change'):?>

<form action="" method="post">
 <div>
	 Название города:* <input type="text" required="required" name="count" value="<?php  echo htmlspecialchars($p['name']);?>"> 
	</div>
	<input type="submit" name="ok" value="Записать обновления">
  </form>
<?endif;?>
<?if($_GET['countries']!='change'):?>
		
		

	 
	 <div class=""> 
  <table class="edit">
   
        <?php 
         if (isset($info)) {
		 echo' <tr> <td>';?>
          <h1><?php echo $info;?> </h1>
        <?php echo' </tr> </td>'; } ?>
     
	
    <tr>
	 <td>
      <p>Все существующие города: </p>
     </td>
	  <td>
      <p> Действия </p>
     </td>
	 <td>
      <p>Название </p>
     </td>
	 
	</tr>
     
      <?php while($p=$row->fetch_array(MYSQLI_ASSOC)){?>
 	<tr>
	 <td> 
       <a href="/edit/change/cities/<?php echo $p['cities_id'];?>">Отредактировать</a>
	 </td>
	 <td>
      <a href="/delete/cities/<?php echo $p['cities_id'];?>">Удалить</a>
	</td>
	 <td>
	   <b> <?php echo $p['name'];?></b> 
	 </td>
	
	</tr>

     <?php } ?>
  

</table>
<?endif;?>