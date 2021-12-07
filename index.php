<?php
ob_start();
session_start();

;

include('config/header.php');
include('config/constant.php');
?>

    <?php
    if(isset($_SESSION['register'])){
        echo $_SESSION['register'];
        unset($_SESSION['register']);
    }
    ?>
    <!--Sugguest tour-->
    <section>
        <h2 class="text-center my-4 fw-bold fs-1 ">Các thể loại tour phổ biến</h2>
        <div class="container-fluid d-flex justify-content-around">

                <div class="hl-tour">
                    <img src="img/hl-tour(1).jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white ">Tour du lịch biển</h3>
                </div>
        
 
                <div class="hl-tour">
                    <img src="img/hl-tour-chil.jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white">Tour du lịch</h3>
                </div>
            
 
                <div class="hl-tour">
                    <img src="img/hl-tour-country.jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white">Tour di sản Việt</h3>
                </div>
            
  
                <div class="hl-tour">
                    <img src="img/hl-tour-island.jpg" alt="" class=" img-cruv">

                    <h3 class="hl-tour-content text-white">Tour biển đảo</h3>
                </div>
            
        </div>
    </section>
    <!--highlight tour-->



    <!--family tour-->
    <section class=" mt-5 bg-light ">


        <h3 class="text-center my-4 fw-bold fs-1">Booking Tour</h3>
        <div class=" container d-flex   ">

        <?php
        //Truy vấn bảng tour (có thể dùng booking hoặc tùy)
        $sql = "SELECT * FROM tour";
        $result = mysqli_query($conn,$sql);
        //check xem bảng tour có đc kết nối hay ko
        if(mysqli_num_rows($result)>0){
            //tour được kết nối
            while($row = mysqli_fetch_assoc($result)){
                //Get the Values like img,tour_Name,tour_number(lấy giá trị cần dùng)
                $tour_id = $row['tour_id'];
                $tour_Name = $row['tour_Name'];
                $img = $row['img'];
                $tour_number = $row['tour_number'];

        ?>
        

            <div class=" me-4">
                <a href="#">
                    <img src="<?php echo $img?> " class="card-img-top img-cruv " alt="... "><!--lấy ảnh từ csdl-->
                </a>
                <div class="card-body ">
                    <a href="detail.php?tour_id=<?php echo $tour_id?>">
                        <h4 class="tour_name  ">
                             <?php echo $tour_Name?> <!--lấy tên của tour từ csdl-->
                        </h4>
                    </a>
                    <p class="fs-4 fst-italic fw-light">Tour <?php echo $tour_number ?> người</p><!--lấy số lượng khách của tour từ csdl-->

                </div>
                <div class="form d-flex justify-content-between">
                    <a href="booking_tour.php?tour_id=<?php echo $tour_id ?>">
                        <button type="submit" class=" btn bg-danger text-light fw-bold">Đặt ngay</button>
                    </a>
                    <a href="detail.php?tour_id=<?php echo $tour_id ?>">
                        <button type="submit" class=" btn btn-outline-primary ">Xem chi tiết</button>
                    </a>
                </div>
            </div>
            <?php
            }
        }
        ?>
    </section>
          

    
<?php

include('config/footer.php')
?>
