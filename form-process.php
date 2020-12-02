<?php
include("config1.php");
extract($_POST);
$sql = "INSERT INTO `contactdata1`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?> 