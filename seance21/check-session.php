<?php
session_start();

if($_SESSION['fingerPrint'] !== md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'])){
    header('location:login.php');
    exit();
}

?>