<?php
    if(isset($_POST["register"])) {
        $guest_username = $_POST["guest_username"];
        $guest_password = $_POST["guest_password"];
        $guest_email = $_POST["guest_email"];
        $guest_phone = $_POST["guest_phone"];
        $guest_address = $_POST["guest_address"];
        $guest_age = $_POST["guest_age"];
        $guest_gender = $_POST["guest_gender"];


        include("./config/constant.php");
        $sql = "INSERT INTO `user` (`guest_username`, `guest_password`, `guest_email`, `guest_phone`, `guest_address`, `guest_age`, `guest_gender`)
        VALUES ( '$guest_username', '$guest_password', '$guest_email', '$guest_phone', '$guest_address', '$guest_age', '$guest_password')";
        $result = mysqli_query($conn,$sql);
        if($result > 0){
            // $_SESSION['register']= "";
            header("location: ./index.php");
        }else{
            // $_SESSION['register'] ="Lỗi";
            header("location:./error.php");
        }

    
    }
?>