<?php
session_start();

if(isset($_SESSION["auth"])) {
    unset($_SESSION["auth"]);
}

if(isset($_SESSION["user_auth"])) {
    unset($_SESSION["user_auth"]);
    unset($_SESSION["cart"]);
}

header("Location: index.php");
?>