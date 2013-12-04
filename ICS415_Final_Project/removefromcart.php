<?php
   $mysqli = new mysqli("localhost","root","","socks");
    
    if($mysqli -> connect_errno){

	echo "FAILURE:(".$mysqli->connect_errno.")".$my->connect_error; 
    }

	
   if(isset($_POST["checkbox"])){
		foreach($_POST['checkbox'] as $checkbox){
   			$select = "DELETE FROM cart WHERE cart_id=$checkbox";
			$result = mysqli_query($mysqli, $select);
			if(!$result){
				echo 'Could not run query: ' . mysql_error ();
				exit();
			}
		
		}
	}
	header('Location: cart.html');
	
?>
