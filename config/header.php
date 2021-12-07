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
    <!--Navbar-->

    <!--Search-->
    <section class="search d-flex align-items-center ">
        <form action="timkiem.php" class="container searching-form " id="datasearch">
            <input class="form-control " type="search" id="searchtour" name="search" placeholder="Search" aria-label="Search" onchange="openPage()">
                <a href="timkiem.php">
                <button class="btn btn-primary" id="btnshowtour" type="submit">Search</button>
                </a>
        </form>
    </section>
    <!--Search-->
