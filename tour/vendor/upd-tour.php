<?php
session_start();
require_once("../../db/db.php");

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$descr = $_POST['descr-tour'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];

$path = 'upload/tour/' . time() . $_FILES['imageproduct']['name'] . ".png";
move_uploaded_file($_FILES['imageproduct']['tmp_name'], '../../' . $path);

$sel_tour = mysqli_query($link, "SELECT * FROM `tours` WHERE `title` = '$title'");
$sel_tour = mysqli_fetch_assoc($sel_tour);

if(!empty($_FILES['imageproduct']['name'])) {
    if(empty($sel_tour)) {
        mysqli_query($link, "UPDATE `tours` SET `title`='$title',`price`='$price',`pathimg`='$path',`descrip`='$descr',`startdate`='$startdate',`finishdate`='$enddate' WHERE `id` = '$id'");
        header("Location: ../cart-tour.php?id=" . $sel_tour['idcountry']);
    } else {
        $_SESSION["errMes"] = 'Такой тур уже существует!';
        header("Location: ../cart-tour.php?id=" . $sel_tour['idcountry']);
        session_destroy();
    }
} else {
    mysqli_query($link, "UPDATE `tours` SET `title`='$title',`price`='$price',`descrip`='$descr',`startdate`='$startdate',`finishdate`='$enddate' WHERE `id` = '$id'");
    header("Location: ../cart-tour.php?id=" . $sel_tour['idcountry']);
}


?>