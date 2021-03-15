<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link rel="stylesheet" href="style.css" />
    <title>Register</title>
  </head>
  <body>
    

  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.html">AirFitness</a>
        <button class="navbar-toggler" id="navbarBurger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact
              </a>
            </li>
          </ul>
          <a class="nav-link" id="navbarSignIn" href="signin.php">Sign in</a>
          <a class="nav-link" id="navbarRegister" href="register.php">Register</a>
        </div>
      </div>
    </nav>



  <section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-black">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Register</h1>
                    <div class="px-2">
                        <form action="" class="justify-content-center">
                            <div class="form-group">
                                <label class="sr-only" for="username" >Username: </label>
                                <input type="text" class="form-control" placeholder="Jane_Doe" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email" >Email:</label>
                                <input type="email" class="form-control" placeholder="jane.doe@example.com" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="password" >Password:</label>
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-lg btn-outline-dark">Submit</button>
                            <p>Already a user?  <a href="signin.php"><b> Log in</b></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!--
      <div class="header">
          <h2 class="text-center"> Register</h2>
      </div>
      <form method"post" class="form-inline justify-content-center">
            <div>
                <label for="username"> Username: </label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="email"> Email: </label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="password"> Password: </label>
                <input type="password" name="pwd_1" required>
            </div>
            <div>
                <label for="password"> Confirm Password: </label>
                <input type="password" name="pwd_2" required>
            </div>

            <button type="submit" name="login_user"> Submit</button>
            <p>Already a user?<a href="login.php"><b>Log in</b></a></p>
      </form>
-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
