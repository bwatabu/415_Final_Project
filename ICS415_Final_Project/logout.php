<?php
	if(isset($_COOKIE["name"])){
		unset($_COOKIE["name"]);
		setcookie("name",'',time()-3600);
	}
	if(isset($_COOKIE["email"])){
		unset($_COOKIE["email"]);
		setcookie("email",'',time()-3600);
	}
	header('Location: final.html');
?>