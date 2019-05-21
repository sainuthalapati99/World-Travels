<?php
session_start();
unset($_SESSION["user"]);
//session_destroy();
//$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
header('Location:login.php');
?>