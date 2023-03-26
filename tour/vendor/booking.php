<?php
session_start();
require_once("../../db/db.php");
$idtour = $_POST['id'];
$iduser = $_COOKIE['id'];

mysqli_query($link, "INSERT INTO `orders`(`idtour`, `iduser`) VALUES ('$idtour','$iduser')");
header("Location: ../tour.php?id=" . $idtour);
var_dump($_POST);
var_dump($_COOKIE);
?>