<?php
	  $name = $_POST['num']; 
	  $my_array = str_split($name);
		for ($i=0; $i < strlen($name); $i++) { 
			 echo $my_array[$i];
			for ($j=0; $j <= $i ; $j++) { 
				echo 0;
			}
			echo"<br>";
		}
	  
	?>