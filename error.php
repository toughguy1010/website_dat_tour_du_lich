<?php
if(isset($_SESSION['register'])){
    echo $_SESSION['register'];
    unset($_SESSION['register']);}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>CSE458_Travel</title>
  </head>
  <body >
    <!--Navbar-->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="Logo">
                </a>

                <form class="d-flex">
                      <?php
                      //echo $_SESSION['user'];
                      if(isset($_SESSION['login'])){
                        echo '<a href="logout.php">
                        <button type="button" class="btn btn-primary me-3 ">Logout</button>
                        </a>';
                      }else{
                        echo '
                        <a href="login.php">
                        <button type="button" class="btn btn-primary me-3 ">Login</button>
                        </a>';
                        echo '
                        <a href="register.php">
                        <button type="button" class="btn btn-primary me-3 ">Register</button>
                        </a>';
                      }
                      ?>
                    
                   
                </form>
               
            </div>
        </nav>
    </section>
        <div class=" container text-center mt-5 error">
          <div>
            <h1 class="fw-bold">404 NOT FOUND</h1>
            <h3>
            <a href="index.php" class="btn btn-primary" >Quay lại trang chủ</a>
            </div>
            <br>
            <img src="https://www.freeiconspng.com/uploads/error-icon-4.png" alt="">
            </h3>
        </div>

  <?php
include('config/footer.php')
  ?>