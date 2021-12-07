<?php
ob_start();
session_start();
 include('../config/constant.php');
 if(isset($_SESSION["login"]))
{
    header("location:../index.php");
}
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
    <title>Hello, world!</title>
  </head>

<section class="text-center container mt-5 ">
    <style>

.form-signin{
  max-width: 50%;
  margin: 0 auto;
}
body{
    
    background-position: 0 0, center;
    background-color:#dff9fb;
    
}
.loginbox{ 
    max-width: 600px;
    margin: auto;
    background-image: url(https://assets.wego.com/image/upload/v1611848131/country-pages/vn.jpg);
    height:30rem;
    border-radius: 8px;
}
    </style>
    
<body>
    

    <main class="form-signin">
        <form method="POST">
            <div class="logo">
                <a class="navbar-brand" href="../index.php">
                    <img src="../img/logo.png" alt="Logo">
                </a>
                </div>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
               
            <div class="loginbox">
                <div class="form-floating">
                    <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com">
                    <label for="floatingInput">Tên đăng nhập</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <div>
                <button type="submit" class="btn btn-danger" name="login">Login</button>
                </div>
                <div><a href="../login.php"><button type="button" class="btn btn-danger my-3">Quay về </button></a></div>

        
            </div> 
        </form>    
        

<?php
include('../config/footer.php');
    // session_destroy();
        if(isset($_POST["login"]))
        {
            $username=trim($_POST["username"]);
            $password=($_POST["password"]);
            $sqllogin="SELECT * FROM user WHERE guest_username='$username' AND guest_password='$password'";
            $result = mysqli_query($conn,$sqllogin);
            if(mysqli_num_rows($result) > 0){
                $rowlogin= mysqli_fetch_assoc($result);
                $_SESSION['login']= $rowlogin['guest_email'];
                $_SESSION['guest_id']=$rowlogin['guest_id'];
                header('location:../index.php');
            }else{
                echo "sai";
                //header("location:../user/login.php");
            }
            
        }
?>