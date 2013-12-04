<?php

$mysqli = new mysqli("localhost","root","","socks");

if($mysqli -> connect_errno){

	echo "FAILURE:(".$mysqli->connect_errno.")".$my->connect_error; 

}

$enterEmail = $_POST['email'];
$checkEmail = "SELECT email FROM users WHERE email = '$enterEmail'";
$emailQuery = mysqli_query($mysqli,$checkEmail);
if(mysqli_num_rows($emailQuery)>0){
	session_start();
	$_SESSION['fromForm'] = true;
	header('Location: sign_up.html');
} 



if($_SERVER['REQUEST_METHOD'] == "POST"){
$valid = true;
	
$entry = "INSERT INTO users (first_name,last_name,email,pw,dob) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]','$_POST[dob]')";

		
		
		$boolean = mysqli_query($mysqli, $entry);
		
		
		if($boolean){
	

	echo "ALL added to table.";
}else{
	die('Error: ' .mysqli_error($mysqli));
	$valid = false;
}

if($valid){

	header('Location: new_user.html');
}



}


?>