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
$sizes = $_POST["sizes"];


$result = mysqli_query($conn, "UPDATE `clothes` SET name='$name',price='$price',tag_type='$type',category_id='$category'". $isImageExist ." WHERE id='$id';");
if ($result) {

    $deleteResult = mysqli_query($conn, "DELETE FROM cloth_sizes WHERE cloth_id='$id';");
    foreach ($sizes as $element) {
        echo "INSERT INTO `cloth_sizes` (`cloth_id`,`size_id`) VALUES ('$id','$element')";
        
        mysqli_query($conn, "INSERT INTO `cloth_sizes` (`cloth_id`,`size_id`) VALUES ('$id','$element')");
    }
} else {
    echo "Error: " . mysqli_error($conn);
    exit();
}

header("Location:index.php");
?>