<?php
session_start();

if(isset($_SESSION["user_id"])) {
	$user_id = $_SESSION["user_id"];
}

if(!isset($_SESSION["user_auth"])) {    
	header("Location: index.php");    
	exit();  
}
?>