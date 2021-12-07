<?php
session_start();
include('config/header.php');
include('config/constant.php')

?>

<!-- Bắt đầu code -->


    
   
        <?php
        if(isset($_POST["submit"])) {
        $tour_id = $_POST['tour_id'];
        $sql = "SELECT * FROM tour WHERE tour_id = $tour_id";
        $result = mysqli_query($conn,$sql);
        //check xem bảng tour có đc kết nối hay ko
        if(mysqli_num_rows($result)>0){
           
            //tour được kết nối
            $row = mysqli_fetch_assoc($result);
            $tour_id = $row['tour_id'];
            $tour_Name = $row['tour_Name'];
            $img = $row['img'];
            $tour_number = $row['tour_number'];
            $tour_day_start = $row['tour_day_start'];
            $tour_day_end = $row['tour_day_end'];
            $tour_days = $row['tour_days'];
            $tour_location = $row['tour_location'];
            $tour_guild = $row['tour_guild'];

        
        ?>
            <div class="container-sm text-center">
            <h1 class="fs-1 fw-bold fst-italic my-5">Thông tin tour vừa đặt</h1>
            <div class="row d-flex justify-content-between"> 
                        <div class="col ">
                            <a href="#">
                                <img src="<?php echo $img?> " class="img-fluid rounded-3"  alt="... "> <!--lấy ảnh từ csdl-->
                            </a>
                        </div>
                
                        <div class="col bg-light">
                            <h2 class="tour_Name">
                                <?php echo $tour_Name?> <!--lấy tên của tour từ csdl-->
                            </h2>
                            <p > Số lượng người tối đa: <?php echo $tour_number ?> người </p><!--lấy số lượng khách của tour từ csdl-->
                            <p > Khởi hành: <?php echo $tour_day_start ?>
                            <p > Kết thúc: <?php echo $tour_day_end ?>
                            <p > Địa điểm:  <?php echo $tour_location ?>
                            <p>Hướng dẫn viên: <?php echo $tour_guild ?></p>
                        
                        </div>
            </div>
        </div>
        <?php
            }
        
        ?>
    <?php
            $tour_id = $_POST['tour_id'];
            $guest_id = $_SESSION['guest_id'];
            $booking_guest_name    = $_POST['booking_guest_name'];
            $booking_guest_address = $_POST['booking_guest_address'];
            $booking_guest_number  = $_POST['booking_guest_number'];
            $booking_guest_email   = $_POST['booking_guest_email'];

            $sql ="INSERT INTO `booking_tour`(`tour_id`, `guest_id`, `booking_guest_name`, `booking_guest_address`, `booking_guest_number`,`booking_guest_email`)
            VALUES ($tour_id,$guest_id,'$booking_guest_name', '$booking_guest_address','$booking_guest_number','$booking_guest_email')";
            $result = mysqli_query($conn,$sql);
    ?>
            <section>
            <h1 class="my-4 fs-1 fw-bold fst-italic text-center" >Thông tin khách hàng vừa đặt</h1>
                <div class="container  bg-danger p-2 text-dark bg-opacity-10 ">
                    <p class=" fs-4 fst-italic "> Tên khách hàng: <?php  echo $booking_guest_name ?></p>
                 
                    <p class=" fs-4 fst-italic"> Địa điểm:  <?php echo $booking_guest_address ?></p>
                    <p class=" fs-4 fst-italic"> Email:  <?php echo $booking_guest_email ?></p>
                    <p class=" fs-4 fst-italic"> Số điện thoại:  <?php echo $booking_guest_number ?></p>

            </section>
    <?php
        } else {
            echo '
                <div>
                    Nothing to showw
                </div>
            ';
        }
    ?>        

<?php
include('config/footer.php');



?>