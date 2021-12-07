<?php
ob_start();
session_start();



 include('../config/constant.php');

if(isset($_SESSION["login"]))
{
    header("location:../admin/index.php");
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
<section class="text-center container mt-5 ">
    <style>
.form-signin{
            max-width: 50%;
            margin: 0 auto;
}

    </style>
    <main class="form-signin">
        <form method="POST">
            <?php
                if(isset($_POST["login"]))
        {
            $username=trim($_POST["username"]);
            $password=($_POST["password"]);
            $sqllogin="SELECT * FROM admin WHERE ad_username='$username' AND ad_password='$password'";
            $result = mysqli_query($conn,$sqllogin);
            if(mysqli_num_rows($result) > 0){
                $rowlogin= mysqli_fetch_assoc($result);
                $_SESSION['login']= $rowlogin['ad_username'];
                header('location:../admin/index.php');
            }else{
                echo "sai";
                //header("location:../user/login.php");
            }
            
        }
?>
            
               <a class="navbar-brand" href="../index.php">
                    <img src="../img/logo.png" alt="Logo">
                </a>

            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
            <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
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
            <button type="submit" class="btn btn-danger" name="login">Login </button>
            <div><a href="../login.php"><button type="button" class="btn btn-danger my-3">Quay về </button></a></div>
            
            
            
            <!-- <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button> -->
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>
</section>

<?php
include('../config/footer.php')

?>