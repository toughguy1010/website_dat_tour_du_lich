<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <title>Đăng kí</title>
  </head>
  <body>
    <div class="container-fluid register-form ">
        <h1 class="text-center text-white ">Nhập thông tin đăng kí</h1>
        <form action="./process-register.php" method="POST">
            <div class="mb-3 text-center ">
                <label for="exampleInputEmail1" class="form-label text-white fs-4">Tên đăng nhập</label>
                <input type="text" class="form-control input-register " name="guest_username" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 text-center">
                <label for="exampleInputPassword1" class="form-label text-white fs-4">Mật khẩu</label>
                <input type="password" name="guest_password" class="form-control input-register" id="exampleInputPassword1">
            </div>
            <div class="mb-3 text-center">
                <label for="exampleInputEmail1" class="form-label text-white fs-4">Email</label>
                <input type="text" class="form-control input-register" name="guest_email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 text-center">
                <label for="exampleInputEmail1" class="form-label text-white fs-4">Địa chỉ</label>
                <input type="text" class="form-control input-register" name="guest_address" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 text-center">
                <label for="exampleInputEmail1" class="form-label text-white fs-4">Tuổi</label>
                <input type="text" class="form-control input-register" name="guest_age" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 text-center">
                <label for="exampleInputEmail1" class="form-label text-white fs-4">Giới tính</label>
                <select name="guest_gender" id="">
                    <option value="nam">Nam</option>
                    <option value="nữ">Nữ</option>
                </select>
            </div>

            <div class="mb-3 text-center">
                <label for="exampleInputEmail1" class="form-label text-white fs-4">Số điện thoại</label>
                <input type="text" class="form-control input-register" name="guest_phone" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" name="register" class="btn btn-primary btn-lg">Đăng ký</button>
        </form>
        <!--Footer-->
      <section class="footer mt-5">
        <div class="container">
            <h2>Vì sao chọn CSE458_Travel </h2>
          </div>

            <div class="row">
                <div class="col-4 text-center mt-5">
                <i class="fa-solid fa-globe"></i>
                    <h4>Mạng bán tour</h4>
                    <p>Đầu tiên tại Việt Nam</p>
                    <p>Ứng dụng công nghệ mới nhất</p>
                </div>
                <div class="col-4 text-center mt-5">
                <i class="fa-regular fa-cash-register"></i>
                    <h4>Thanh toán</h4>
                    <p>An toàn & linh hoạt</p>
                    <p>Liên kết với các tổ chức tài chính</p>
                </div>
                <div class="col-4 text-center mt-5">
                <i class="fa-regular fa-sack-dollar"></i>
                    <h4>Giá cả</h4>
                    <p>Luôn có mức giá tốt nhất</p>
                    <p>Bảo đảm giá tốt</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 text-center mt-5">
                <i class="fa-regular fa-face-smile-tongue"></i>
                    <h4>Sản phẩm</h4>
                    <p>Đa dạng, chất lượng</p>
                    <p>Đạt chất lượng tốt nhất</p>
                </div>
                <div class="col-4 text-center mt-5">
                <i class="fa-thin fa-arrow-down-arrow-up"></i>
                    <h4>Đặt tour</h4>
                    <p>Dễ dàng và nhanh chóng</p>
                    <p>Đặt tour với chỉ 3 bước</p>
                </div>
                <div class="col-4 text-center mt-5">
                <i class="fa-regular fa-handshake-angle"></i>
                    <h4>Hỗ trợ</h4>
                    <p>Từ 8h-22h</p>
                    <p>Hotline & Hỗ trợ trực tuyến</p>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>