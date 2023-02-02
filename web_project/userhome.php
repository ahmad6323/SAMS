<?php

if (!isset($_COOKIE['loggedIn'])) {
  header('location:signin.php?rid=5');
}
if (isset($_GET['rid'])) {
  $id = $_GET['rid'];
}
?>
<?php
require_once('Database.php');
$db = new Database();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>

  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>welcome!</strong>


    <?php
    if ($_GET['rid'] == 1) {
      print('Signin successfull');
    } elseif ($_GET['rid'] == 3) {
      print('Signup successfull');
    }
    ?>
  </div>


  <div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="">
            SAMS</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="signin.php">Login</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="allProducts.php?rid=62">Adding a product</a></li>
          <li><a href="RecordofProduct.php">showAllRecords</a></li>
          <li><a href="showAllUsers.php">showAllUsers</a></li>
        </ul>
      </div>
    </nav>
  </div>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-caption d-none d-md-block" style="margin:20%; background: -webkit-linear-gradient( #004ff9, #fff94c);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">
      <h1 style="font-size:50px; font-weight: 800; ">SPORTS ACCESSORIES MANAGEMENT SYSTEM </h1>
    </div>
    <div class="carousel-inner">
      <div class="item active">
        <img src="5.jpg" alt="Los Angeles" style="opacity:0.5;">
      </div>

      <div class="item">
        <img src="2.jpg" alt="Chicago" style="opacity:0.5;">
      </div>

      <div class="item">
        <img src="4.jpg" alt="New York" style="opacity:0.5;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="heading" style="margin-top:7%;">
    <h1>our teams </h1>

  </div>
  
  

  <div class="heading" style="margin-top:7%;">
    <h1>purpose of developing this magangement system </h1>

  </div>

  <div class="container1 mt-5" style="background: #eee">



    <section class="">
      <div class="row">
        <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">


          <div class="view overlay rounded z-depth-1 mb-lg-0 mb-4">
            <img class="img-fluid" src="img-01.png" alt="Sample image" width="100%">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

        </div>
        <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">

          <h3 class="font-weight-normal mb-4">SPORTS ACCESSORIES MANAGEMENT SYSTEM</h3>
          <p class="text-muted" style="font-size:20px; margin-top:10%;">sports accessories management system have a lots
            of beneifits like maintain the records
            of all accessories like bats ,balls,footballs , rackets , tennis balls , tenis ball, and manymore. you can
            easily add an accessory or you can easily delete the product or update the product and due to this
            management system you can easily keep the record of all these things. </p>
          <a class="btn btn-outline-primary mx-0" href="#" style=" margin-top:10%;">Read More <i
              class="fas fa-arrow-right fs-9 ml-2"></i></a>

        </div>
      </div>

    </section>


  </div>


  <div class="heading" style="margin-top:7%;">
    <h1>our clients </h1>
  </div>
  <div class="container1">
    <img src="logo-1.png" alt="Avatar" style="width:90px">
    <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
    <p>John Doe saved us from a web disaster.</p>
  </div>

  <div class="container1">
    <img src="logo-2.png" alt="Avatar" style="width:90px">
    <p><span>Rebecca Flex.</span> CEO at Company.</p>
    <p>No one is better than John Doe.</p>
  </div>
  <div class="container1">
    <img src="logo-3.png" alt="Avatar" style="width:90px">
    <p><span>Rebecca Flex.</span> CEO at Company.</p>
    <p>No one is better than John Doe.</p>
  </div>
  <div class="container1">
    <img src="logo-4.png" alt="Avatar" style="width:90px">
    <p><span>Rebecca Flex.</span> CEO at Company.</p>
    <p>No one is better than John Doe.</p>
  </div>
  <div class="container1">
    <img src="logo-2.png" alt="Avatar" style="width:90px">
    <p><span>Rebecca Flex.</span> CEO at Company.</p>
    <p>No one is better than John Doe.</p>
  </div>

  <div class="heading" style="margin-top:7%;">
    <h1>what type of products you can see in this system </h1>
  </div>

  <div class="container1 mt-5" style="background: #eee">



    <section class="">
      <div class="row">
        <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">


          <div class="view overlay rounded z-depth-1 mb-lg-0 mb-4">
            <img class="img-fluid" src="3.jpg" alt="Sample image" width="105%" height="100%">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

        </div>
        <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">

          <h3 class="font-weight-normal mb-4">SPORTS ACCESSORIES MANAGEMENT SYSTEM</h3>
          <p class="text-muted" style="font-size:20px; margin-top:10%;">sports accessories management system have a lots
            of beneifits like maintain the records
            of all accessories like bats ,balls,footballs , rackets , tennis balls , tenis ball, and manymore. you can
            easily add an accessory or you can easily delete the product or update the product and due to this
            management system you can easily keep the record of all these things. </p>
          <a class="btn btn-outline-primary mx-0" href="#" style=" margin-top:5%;">Read More <i
              class="fas fa-arrow-right fs-9 ml-2"></i></a>

        </div>
      </div>
    </section>
  </div>
  <div class="heading" style="margin-top:15%;">
  </div>
  <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted" style="background:black;">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
     
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>SAMS
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">ADD Record</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Display Record</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Delete Record</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i>faisalabad, Pakistan </p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +92 3096323529</p>
          <p><i class="fas fa-print me-3"></i> +92 3096323529</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Ahmad.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>

</html>