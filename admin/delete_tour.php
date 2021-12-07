<?php
include('../config/constant_admin.php');
 $tour_id = $_GET['tour_id'];
 $sql ="DELETE FROM `tour` WHERE tour_id = $tour_id";
 $result = mysqli_query($conn,$sql);
 if($result){
    $_SESSION['noti']= "Đã xóa";
    header("location:mana_tour.php");
}else{
    $_SESSION['noti'] =" Lỗi!!!!";
    header("location:mana_tour.php");
 }
?>