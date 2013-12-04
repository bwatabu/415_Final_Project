<?php
    $mysqli = new mysqli("localhost","root","","socks");
    
    if($mysqli -> connect_errno){

	echo "FAILURE:(".$mysqli->connect_errno.")".$my->connect_error; 

    }

   
   if(isset($_POST["checkbox"])){
		foreach($_POST['checkbox'] as $checkbox){
   			$getItem = "SELECT item_no,item_name,price FROM items WHERE item_no = '$checkbox'";
			$row = mysqli_query($mysqli,$getItem);
			if(!$row){
				echo 'Could not run query: ' . mysql_error();
				exit();
			}
			$theItem = mysqli_fetch_array($row, MYSQL_ASSOC);
			
			$add = "INSERT INTO cart(item_no,item_name,price) VALUES ('$theItem[item_no]','$theItem[item_name]','$theItem[price]')";
			
			$adding = mysqli_query($mysqli, $add);
			session_start();
			$_SESSION['incart']=true;
			header('Location: ' . $_SERVER['HTTP_REFERER']);

		}
	}
	else{
		
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	} 

?>
	
