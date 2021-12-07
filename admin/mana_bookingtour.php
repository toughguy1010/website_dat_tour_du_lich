<?php
include('../config/adminheader.php');
include('../config/constant_admin.php');

?>
 
<div class="container-fluid">
    <h1 class="fw-bold my-5 fst-italic"> Danh sách các đơn đặt tour </h1>
    

    <?php
   if(isset($_SESSION['noti'])){
      echo $_SESSION['noti'];
      unset($_SESSION['noti']);
    }

    ?>

    <table class="table table-info table-striped">
  <thead>
        <tr>
        <th scope="col">Số thứ tự</th>
        <th scope="col">Mã khách đặt</th>
        <th scope="col">Mã tour</th>
        <th scope="col">Tên khách đặt tour</th>
        <th scope="col">Email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Ngày giờ đặt tour</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Xử lí đơn</th>
        </tr>
    </thead>
  <tbody>
    <?php 
    $sql = "SELECT *FROM booking_tour";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        $i = 1; 
        while($row = mysqli_fetch_assoc($result)){
          $booking_id = $row['booking_id'];
          $guest_id = $row['guest_id'];
          $tour_id = $row['tour_id'];
          $booking_guest_name = $row['booking_guest_name'];
          $booking_guest_email = $row['booking_guest_email'];
          $booking_guest_address =  $row ['booking_guest_address'];
          $booking_guest_number = $row['booking_guest_number'];
          $booking_day = $row['booking_day'];
          $booking_status = $row['booking_status'];

    ?>
     <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $tour_id?></td>
      <td><?php echo $guest_id?></td>
      <td><?php echo $booking_guest_name?></td>
      <td><?php echo $booking_guest_email?></td>
      <td><?php echo $booking_guest_address?></td>
      <td><?php echo $booking_guest_number?></td>
      <td><?php echo $booking_day?></td>
      <td>
        <?php
        if($booking_status == "Chốt đơn")
        {
          echo "<label style= 'color: green;'> $booking_status</label>";
        }elseif($booking_status == "Hủy đơn")
        {
           echo "<label style= 'color: red;'> $booking_status</label>";
        }
        ?>
      </td>
      
      <td>
            <a href="report.php?booking_id=<?php echo $booking_id ?>" class="btn btn-outline-primary"> Xác nhận đơn đặt tour </a>
      </td>
    </tr>


    <?php
    $i++;
        }
    }
    
    
    ?>
  
  </tbody>
</table>
</div>

<?php

include('../config/adminfooter.php')
?>