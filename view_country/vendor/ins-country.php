<?php
session_start();
require_once("../../db/db.php");

$title_count = $_POST['title'];  
$path = 'upload/country/' . time() . $_FILES['imageproduct']['name'];
move_uploaded_file($_FILES['imageproduct']['tmp_name'], '../../' . $path);

$sel_count = mysqli_query($link, "SELECT * FROM `country` WHERE `title` = '$title_count'");
$sel_count = mysqli_fetch_assoc($sel_count);

if(empty($sel_count)) {
    mysqli_query($link, "INSERT INTO `country`(`title`, `pathimg`) VALUES ('$title_count', '$path')");
    header("Location: ../view_all.php");
} else {
    $_SESSION["errMes"] = 'Такая страна уже существует!';
    header("Location: ../add_country.php");
    session_destroy();
}

?>