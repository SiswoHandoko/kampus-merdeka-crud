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
$sizes = $_POST["sizes"];

$result = mysqli_query($conn, "INSERT INTO `clothes` (`name`,`tag_type`,`price`,`category_id`,`status`,`image`) VALUES ('$name','$type',$price,$category,'available','$imageName')");
if ($result) {
    $insertedId = mysqli_insert_id($conn);
    foreach ($sizes as $element) {
        echo "INSERT INTO `cloth_sizes` (`cloth_id`,`size_id`) VALUES ('$insertedId','$element')";
        mysqli_query($conn, "INSERT INTO `cloth_sizes` (`cloth_id`,`size_id`) VALUES ('$insertedId','$element')");
    }
} else {
    echo "Error: " . mysqli_error($conn);
    exit();
}
header("Location:index.php");
?>