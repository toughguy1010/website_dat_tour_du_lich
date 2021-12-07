<?php
ob_start();
 include('../config/adminheader.php');
 include('../config/constant_admin.php');

  $tour_id = $_GET['tour_id'];
  $sql = "SELECT * FROM tour_id = $tour_id";
  $result = mysqli_query($conn,$sql);
  if($result){
      $row = mysqli_fetch_assoc($result);
      $tour_Name= $row['tour_Name'];;
      $tour_price = $row['tour_price'];
      $tour_day_start = $row['tour_day_start'];
      $tour_day_end = $row['tour_day_end'];
      $tour_days = $row['tour_days'];
      $tour_location = $row['tour_location'];
      $img = $row['img'];
      $tour_phone_contact = $row['tour_phone_contact'];
      $tour_guild = $row['tour_guild'];
      $tour_number =$row['tour_number'];
  }
?>

<section class="container-fluid text-center form-bg py-4">
    <h1 class="fw-bold my-5 fst-italic"> Cập nhập thông tin tour </h1>
    <div class="row">
        <div class="col-12">
            <form method = "POST">
                <div class="mb-3">
                    <label class="form-label input-label">Tên tour</label>
                    <input type="text" class="form-control  input-text" name="tour_Name" id="tour_Name">
                </div>
                <div class="mb-3">
                    <label class="form-label input-label">Giá</label>
                    <input type="text" class="form-control  input-text" name="tour_price" id="tour_price">
                </div>
                <div class="mb-3">
                    <label class="form-label input-label">Ngày khởi hành</label>
                    <input type="date" class="form-control  input-text" name="tour_day_start" id="tour_day_start">
                </div>
                <div class="mb-3">
                    <label class="form-label input-label">Ngày kết thúc</label>
                    <input type="date" class="form-control  input-text" name="tour_day_end" id="tour_day_end">
                </div>
                <div class="mb-3">
                    <label class="form-label input-label">Thời gian tour</label>
                    <input type="text" class="form-control  input-text" name="tour_days" id="tour_days">
                </div>
                <div class="mb-3">
                    <label class="form-label input-label">Địa điểm</label>
                    <input type="text" class="form-control  input-text" name="tour_location" id="tour_location">
                </div>
                <div class="mb-3">
                    <label class="form-label input-label">Ảnh</label>
                    <input type="text" class="form-control  input-text" name="img" id="img">
                </div>
                <div class="mb-3">
                    <label class="form-label input-label">Số điện thoại liên lạc</label>
                    <input type="text" class="form-control  input-text" name="tour_phone_contact" id="tour_phone_contact">
                </div>
                <div class="mb-3">
                    <label class="form-label input-label">Hướng dẫn viên</label>
                    <input type="text" class="form-control  input-text" name="tour_guild" id="tour_guild">
                </div>
                <div class="mb-3">
                    <label class="form-label input-label">Số lượng chỗ</label>
                    <input type="text" class="form-control  input-text" name="tour_number" id="tour_number">
                </div>
                <button type="submit" class=" btn btn-primary btn-lg" name="submit">Sửa thông tin</button>
            </form>
        </div>
    </div>
</section>




<?php


if(isset($_POST['submit'])){
    $tour_Name = $_POST['tour_Name'];;
      $tour_price = $_POST['tour_price'];
      $tour_day_start = $_POST['tour_day_start'];
      $tour_day_end = $_POST['tour_day_end'];
      $tour_days = $_POST['tour_days'];
      $tour_location = $_POST['tour_location'];
      $img = $_POST['img'];
      $tour_phone_contact = $_POST['tour_phone_contact'];
      $tour_guild = $_POST['tour_guild'];
      $tour_number = $_POST['tour_number'];
      $sql = "UPDATE `tour`
      SET `tour_Name` ='$tour_Name',
      `tour_price` = '$tour_price',
      `tour_day_start` = '$tour_day_start',
      `tour_day_end` = '$tour_day_end',
      `tour_days`= '$tour_days',
      `tour_location` = '$tour_location',
      `img` = '$img',
      `tour_phone_contact` = '$tour_phone_contact',
      `tour_guild` = '$tour_guild',
      `tour_number` = '$tour_number'
      WHERE `tour_id` = $tour_id";
      $result = mysqli_query($conn,$sql);
      if($result > 0){
        $_SESSION['noti']= "Đã cập nhật thành công";
        header("location:mana_tour.php");
    }else{
        $_SESSION['noti'] =" Lỗi!!!!";
      header("location:mana_tour.php");
    }
}
include('../config/adminfooter.php');
?>