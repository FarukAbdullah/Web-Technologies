<?php
session_start();
foreach($_COOKIE as $k=>$v){
	setcookie($k,"",time()-20);
	$_SESSION["valid"]=" ";
    unset($_SESSION["valid"]);
}
header("Location:login.php");
?>