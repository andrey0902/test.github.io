

<div class="tab ">
<table class="end fest">
    <tr>
		<td>
		 <p>все страны </p>
		</td>
		</tr>
		<?php
		while($p=$row->fetch_array(MYSQLI_ASSOC)){
		echo "<tr><td>"; 
		echo $p['name'];
		echo "</td></tr>";
		}?>
	</tr>
 	</table> 
	 
</div>	 
	 <table class="end">
    <tr>
		<td>
		 <p>все города </p>
		</td>
		</tr>
		<?php
		 while($p1=$row1->fetch_array(MYSQLI_ASSOC)){
		echo "<tr><td>"; 
		 echo $p1['name'];
		echo "</td></tr>";
		}?>
	</tr>
 	</table> 
	  
	  <table class="end">
    <tr>
		<td>
		 <p>все языки </p>
		</td>
		</tr>
		<?php
		 while($p2=$row2->fetch_array(MYSQLI_ASSOC)){
		echo "<tr><td>"; 
		 echo $p2['name'];
		echo "</td></tr>";
		}?>
	</tr>
 	</table> 
	 
	 <div class="reset"></div>

	 
	 
	 
	 
	 
	 
	 
	 

		



		