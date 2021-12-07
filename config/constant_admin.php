<?php
 session_start();
//ket noi database
$conn = mysqli_connect('localhost','root','','dulich');
if(!$conn){
    die('Khong the ket noi');
}

?>