<?php
   $mysqli = new mysqli("localhost","root","","socks");
    
    if($mysqli -> connect_errno){

	echo "FAILURE:(".$mysqli->connect_errno.")".$my->connect_error; 
    }

	


   			$select = "TRUNCATE TABLE cart";
			$result = mysqli_query($mysqli, $select);
			if(!$result){
				echo 'Could not run query: ' . mysql_error ();
				exit();
			}
	
		
		
	
	header('Location: cart.html');
	
?>
