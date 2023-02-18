<?php
	  $name = $_POST['num']; 
	  
		for ($i=0; $i < $name; $i++) { 
			 if ($i % 2 == 1){
                echo $i." ";
             }
		}
	  
	?>