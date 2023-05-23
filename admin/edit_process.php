<?php
include "reusable/config/connection.php";

$id = $_GET["id"];

if(isset($_FILES)){
    $target_dir = "../public/img/uploaded/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = true;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $imageName = $_FILES["image"]["name"];
    $isImageExist = ",image='$imageName'";
}

$name = $_POST['name'];
$price = $_POST['price'];
$type = $_POST['type'];
$category = $_POST['category'];

// echo "UPDATE `clothes` SET name='$name',price='$price',tag_type='$type',category_id='$category'". $isImageExist ." WHERE id='$id';";
// exit();
$result = mysqli_query($conn, "UPDATE `clothes` SET name='$name',price='$price',tag_type='$type',category_id='$category'". $isImageExist ." WHERE id='$id';");

header("Location:index.php");
?>