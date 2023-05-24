<?php
include "reusable/config/connection.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "DELETE FROM clothes WHERE id='$id';");

header("Location:index.php");
?>