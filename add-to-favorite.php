<?php  
include("confs/user-auth.php");
include("confs/config.php"); 

$data = json_decode(file_get_contents('php://input'), true);
$uid = $data["uid"];
$iid = $data["iid"];
$status = $data["status"];

$user_result = mysqli_query($conn, "SELECT * FROM favorites WHERE uid=$uid AND iid=$iid");

if($status === "on" && mysqli_num_rows($user_result) !== 1) {
	$sql = "INSERT INTO favorites(uid, iid, status, created_date, modified_date)
	VALUES ('$uid', '$iid', '$status', now(), now())";  
} else {
	$sql = "DELETE FROM favorites WHERE uid=$uid AND iid=$iid";
}

mysqli_query($conn, $sql);
?>