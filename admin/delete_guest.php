<?php
include('../config/constant_admin.php');
 $guest_id = $_GET['guest_id'];
 $sql ="DELETE FROM `user` WHERE guest_id = $guest_id";
 $result = mysqli_query($conn,$sql);
 if($result){
    $_SESSION['noti']= "Đã xóa";
    header("location:mana_guest.php");
}else{
    $_SESSION['noti'] =" Lỗi!!!!";
    header("location:mana_guest.php");
 }
?>