<?php 
    include("confs/config.php");
    session_start();

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
	
    move_uploaded_file($tmp, "assets/images/profiles/$profile");
    $sql = "INSERT INTO users (image, name, phone, email, password, gender, weight, heightft, heightin, age, activity, created_date, modified_date)
        VALUES ('$profile', '$name', '$phone', '$email', '$password','$gender', '$weight', '$heightft', '$heightin', '$age','$activity', now(), now())";

    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION["user_auth"] = true;
        $_SESSION["user_id"] = $row["id"];
        header("Location: main-category.php");
    } else {
        header("Location: index.php");
    }
?>