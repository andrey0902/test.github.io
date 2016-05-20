

<table class="edit">
    <tr>
		 <td>
		  <p>Страна </p>
		 </td>
		  <td>
		  <p> Город </p>
		 </td>
		 <td>
		  <p> Национальный язык </p>
		 </td>
	</tr>
 	<tr>
		 <td> 
		 <?php
		while($p=$row->fetch_array(MYSQLI_ASSOC)){
		 if($p['countries_id']==$p1){
		   echo $p['name'];
		 }
		 }?>
		 </td>
		 <td>
		  <?php
	    while($p1=$row1->fetch_array(MYSQLI_ASSOC)){
		if($p1['cities_id']==$id){
		 echo $p1['name'];
		 }}?>
		</td>
	    <td>
	   	  <?php
         while($p2=$row2->fetch_array(MYSQLI_ASSOC)){
	     echo $p2['name'];
	      }?>
	   </td>
	</tr>
</table>
		
	
