<?php
include "reusable/config/connection.php";

$target_dir = "../public/img/uploaded/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = true;
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$name = $_POST['name'];
$price = $_POST['price'];
$type = $_POST['type'];
$category = $_POST['category'];
$imageName = $_FILES["image"]["name"];



$result = mysqli_query($conn, "INSERT INTO `clothes` (`name`,`tag_type`,`price`,`category_id`,`status`,`image`) VALUES ('$name','$type',$price,$category,'available','$imageName')");

header("Location:index.php");
?>