<?php
session_start();
require_once("../../db/db.php");

var_dump($_POST);

$username = $_POST['loguser'];
$password = $_POST['logpass'];

$sel_user = mysqli_query($link, "SELECT * FROM `user` WHERE `login` = '$username'");
$sel_user = mysqli_fetch_assoc($sel_user);

$idus = $sel_user['id'];
$idgr = $sel_user['usrgroup'];


$seluser_pass = $sel_user['pass'];

if(!empty($sel_user)) {
    if(password_verify($password, $seluser_pass)) {
        setcookie("id", $idus, time()+23760, "/");
        setcookie("idgroup", $idgr, time()+23760, "/");
        header("Location: ../../index.php");
    } else {
        $_SESSION["errMes"] = 'Пароль неверный!';
        header("Location: ../login.php");
    }
} else {
    $_SESSION["errMes"] = 'Такого пользователя не существует';
    header("Location: ../login.php");
}

?>