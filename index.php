<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IIC Bus Management System</title>
  <link rel="stylesheet" href="css/index.css" />
  <script src="https://kit.fontawesome.com/940b4ce52e.js" crossorigin="anonymous"></script>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
  </script>
</head>

  <!-- header -->
  <header class="header" data-header>
    <div class="container">
      <img src="img/buslogo.png" alt="Bus Logo" width="60px" height="60px">
      <h2 style="color: hsl(211, 100%, 35%); cursor: pointer;">IIC Bus Management System</h2>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>
      <!-- nav -->
      <nav class="navbar">
        <ul class="navbar-list">

          <!-- <li>
            <a href="#hero" class="navbar-link">Home</a>
          </li> -->

        </ul>

        <div class="header-actions">
          <a href="login.php" class="header-action-link">Sign Out</a>

          <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <i class="fa-solid fa-user"></i><strong style="color: hsl(211, 100%, 35%);"><?php echo $_SESSION['username']; ?>
              <?php endif ?>


        </div>
      </nav>

    </div>
  </header>

  <main>
    <article>

      <!-- hero section -->
      <section class="hero" id="hero">
        <div class="container">

          <div class="hero-content">
            <h1 class="h1 hero-title">IIC Bus Management System</h1>

            <p class="hero-text">

            </p>

            <p class="form-text">
              This is an IoT Project created by group of student from L2C4 group. The       members are Kaman Limbu, Nischal Acharya, Sarina Rai, Aavash Shrestha and Numa Limbu. We are making easier for college student to track their bus location.<br>
              Click here to start viewing bus location:<a href="buslocation.html" style="font-weight: bold";>➩ Click Here</a>
            </p>
          </div>

          <figure class="hero-banner">
            <img src="img/hero.webp" alt="Hero image">
          </figure>

        </div>
      </section>

<!-- Team -->
      <section>
      <div class="row">
        <h1>Our Team</h1>
      </div>
      <div class="row">
        <!-- Column 1-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="img/team 1.jpg" />
            </div>
            <h3>Kaman Limbu</h3>
          </div>
        </div>
        <!-- Column 2-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="img/team 2.jpg" />
            </div>
            <h3>Nischal Acharya</h3>
          </div>
        </div>
        <!-- Column 3-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="img/team 3.jpg" />
            </div>
            <h3>Sarina Rai</h3>
          </div>
        </div>
        <!-- Column 4-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="img/team 4.jpg" />
            </div>
            <h3>Numa Limbu</h3>
          </div>
        </div>
        <!-- Column 5-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="img/team 5.jpg" />
            </div>
            <h3>Aavash Shrestha</h3>
          </div>
        </div>

      </div>
    </section>
      
      

      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <script>
        const navToggleBtn = document.querySelector("[data-nav-toggle-btn]");
        const header = document.querySelector("[data-header]");

        navToggleBtn.addEventListener("click", function() {
          header.classList.toggle("active");
        });
      </script>
      <script>
        if(!sessionStorage.getItem('alertShown')){
  swal("Login Succesfull", "You're login Succesfully in IIC Bus Management System Dashboard..Welcome Back", "success", {
          button: "Ok",
        });
   sessionStorage.setItem('alertShown', true);
}

      </script>

     

</body>

</html>