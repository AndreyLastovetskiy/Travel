<?php
session_start();
require_once("../../db/db.php");

var_dump($_POST);

$usr_group = 3;
$username = $_POST['reguser'];
$password = $_POST['regpass'];
$cpassword = $_POST['regcpass'];
$email = $_POST['regemail'];
$phone = $_POST['regphone'];
$fio = $_POST['regfio'];

$pass_hash = password_hash($password, PASSWORD_DEFAULT);

$sel_user = mysqli_query($link, "SELECT * FROM `user` WHERE `login` = '$username'");
$sel_user = mysqli_fetch_assoc($sel_user);

if(empty($sel_user)) {
    if($password != $cpassword) {
        $_SESSION["errMes"] = 'Пароли не совпадают';
        session_destroy();
        header("Location: ../registration.php");
    } else {
        mysqli_query($link, "INSERT INTO `user`(`usrgroup`, `login`, `pass`, `email`, `phone`, `fio`) VALUES ('$usr_group','$username','$pass_hash','$email','$phone','$fio')");
        header("Location: ../../login/login.php");
    }
} else {
    $_SESSION["errMes"] = 'Такой пользователь уже существует';
    session_destroy();
    header("Location: ../registration.php");
}

?>