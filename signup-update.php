<?php
	include("confs/user-auth.php");
	include("confs/config.php");
	$id = $_POST["id"];
	$name = $_POST["name"];	
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$gender = $_POST["gender"];
	$weight = $_POST["weight"];
	$heightft = $_POST["heightft"];
	$heightin = $_POST["heightin"];
	$age = $_POST["age"];
	$activity = $_POST["activity"];
	$profile = $_FILES["profile"]["name"];
	$tmp = $_FILES["profile"]["tmp_name"];

	if($profile) {
		move_uploaded_file($tmp, "assets/images/profiles/$profile");
		$sql = "UPDATE users SET image='$profile', name='$name', phone='$phone', email='$email', password='$password', gender='$gender', weight='$weight', heightft='$heightft', heightin='$heightin', age='$age', activity='$activity', modified_date=now() WHERE id = $id";
	}
	else {
		$sql = "UPDATE users SET name='$name', phone='$phone', email='$email', password='$password', gender='$gender', weight='$weight', heightft='$heightft', heightin='$heightin', age='$age', activity='$activity', modified_date=now() WHERE id = $id";
	}
	mysqli_query($conn, $sql);
	header("Location: my-account.php");
?>