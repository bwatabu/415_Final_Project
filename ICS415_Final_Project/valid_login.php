<?php
	$mysqli = new mysqli("localhost","root","","socks");

if($mysqli -> connect_errno){

	echo "FAILURE:(".$mysqli->connect_errno.")".$my->connect_error; 

}

if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	$enterEmail = $_POST['Email']; 
	$enterPw = $_POST['Password'];
	$check = mysqli_query($mysqli,"SELECT first_name FROM users WHERE email = '$enterEmail' AND pw = '$enterPw'");
	
	if(!$check){
		echo 'Could not run query: ' . mysql_error();
		exit();
	}
	$userFirst = mysqli_fetch_array($check, MYSQL_ASSOC);
	$uF = $userFirst['first_name'];
	$nothing = "";
	if(strcmp($uF,$nothing) != 0){
		setcookie("email",$enterEmail);
		setcookie("name", $uF);
		header('Location: final.html');
	
	}
	else{
	   session_start();
	   $_SESSION['fromValid'] = true;
	   header('Location: login.html');
	}
}
?>

