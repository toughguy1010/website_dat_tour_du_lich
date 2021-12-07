<?php
ob_start();
session_start();

include('config/header.php');
include('config/constant.php');

?>

<style>
.tour_detail{
    color: black;
    font-family: "Times New Roman";
  font-size: 110%;
}
img{
    border-radius: 15px;
}
.tour_Name{
    font-size: 200%;
}
.tour_price{
    font-size: 130%;
    font-family: Arial, Helvetica, sans-serif;
}


    
</style>

<!--Tuyen du lieu-->
<?php
                if(isset($_GET['tour_id']))
                $tour_id = $_GET['tour_id'];
                $sql = "SELECT * FROM tour WHERE tour_id=$tour_id";
                $result = mysqli_query($conn,$sql);
                //check xem bảng tour có đc kết nối hay ko
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        $tour_id = $row['tour_id'];
                        $tour_Name = $row['tour_Name'];
                        $tour_price = $row['tour_price'];
                        $img = $row['img'];
                        $tour_number = $row['tour_number'];
                        $tour_day_start = $row['tour_day_start'];
                        $tour_day_end = $row['tour_day_end'];
                        $tour_days = $row['tour_days'];
                        $tour_location = $row['tour_location'];
                        $tour_guild = $row['tour_guild'];
                        $tour_detail= $row['tour_detail']
                        //$tour_detail=$row['tour_detail'];
?>

 <div class="container mt-5">
     <h1 class="text-center fw-bold my-4 fst-italic"> Chi tiết tour</h1>
        <div class="tour-detail d-flex justify-content-around ">
            <div class= "tour-img tour_detail">
                <img src="<?php echo $img?>" alt="">
            </div>
            <div class="product-info bg-light ms-3">
                <h4><?php echo $tour_Name ?></h4>
                <p > Khởi hành: <?php echo $tour_day_start ?>
                <p > Kết thúc: <?php echo $tour_day_end ?>
                <p > Địa điểm:  <?php echo $tour_location ?>
                <p > Số lượng người tối đa: <?php echo $tour_number ?> người </p>
                <p>Hướng dẫn viên: <?php echo $tour_guild ?></p>
                <p><?php echo $tour_detail ?></p>
                <p class="tour_price " >-  <?php echo $tour_price?><span  style="color:red;" >  VNĐ</span>  -</p>
                <a href="booking_tour.php?tour_id=<?php echo $tour_id ?>" >
                    <button type="submit" class=" btn bg-danger text-light fw-bold">Đặt ngay</button>
                </a>


            </div>
        <div class="clear-both">
        <p></p>
        </div>
        </div>

 </div>
 <?php
            }
        }

?>
<!--Tuyen du lieu-->

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  -->

<?php
include('config/footer.php')
?>