<?php
session_start();
unset($_SESSION['login']);
// unset($_SESSION['user']);
// unset($_SESSION['admin']);
header("location:login.php");
?>