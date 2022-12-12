<?php include('inc/DBConnection.php'); 
$database = new DBConnection();
$db = $database->openConnection();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Prisons Department</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon" /> -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Multi - v4.9.1
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <div class="top-bar">
      <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
          <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
              <small class="fa fa-map-marker-alt text-primary me-2"></small>
              <small>Department of Prisons and Correctional Services</small>
            </div>
          </div>
          <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center">
              <a class="btn btn-sm-square text-primary me-1" href=""
                ><i class="bx bxl-facebook"></i
              ></a>
              <a class="btn btn-sm-square text-primary me-1" href=""
                ><i class="bx bxl-twitter"></i
              ></a>
              <a class="btn btn-sm-square text-primary me-1" href=""
                ><i class="bx bxl-linkedin"></i
              ></a>
              <a class="btn btn-sm-square text-primary me-0" href=""
                ><i class="bx bxl-instagram"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar Start -->
    <div id="header" class="container justify-content-between">
      <div class="row">
        <div class="col-lg-1 text-center">
          <div class="m-10">
            <img class="prison_logo" src="images/logo/TamilNadu_Logo.svg.png" alt=""/>
          </div>
        </div>
        <div class="col-lg-10 align-items-center">
          <div class="header-title">
            <a href="index.php">
              <h3>Department of Prisons and Correctional Services</h3>
              <h5>Government of Tamil Nadu</h5>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="menu-bar">
      <div class="container">
        <nav id="navbar" class="navbar">
          <ul>
            <?php $sql ="SELECT * FROM public.menus ORDER BY menu_id ASC ";
            foreach ($db->query($sql) as $row) {
            ?>
            <li class="dropdown">
              <a class="nav-link scrollto active" href="#hero"><span><?php echo $row['menu_name_en'];?>
              <!-- <i class="bi bi-chevron-down"></i> -->
              </span></a>
              <ul><?php
                  $sql ="SELECT * FROM sub_menus where cate_code='".$row['menu_id']."' ORDER BY menu_id ASC ";
                  foreach ($db->query($sql) as $menus) { ?>
                 <?php if ($menus['cate_code']) { ?>
                        <li><a href="#"><?php echo $menus['menu_name_en'];?></a></li>
                    <?php  }else {?>
                    <?php } } ?>
                </ul>
            </li>
            <?php } ?>
            <!-- <li class="dropdown">
              <a class="nav-link scrollto" href="#about"
                >About Us<i class="bi bi-chevron-down"></i>
              </a>
              <ul>
                <li><a href="#">Aim & Brief</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Category of Prisons</a></li>
                <li><a href="#">Jurisdiction of Prisons</a></li>
                <li><a href="#">Probation Branch</a></li>
                <li><a href="#">Establishment</a></li>
                <li><a href="#">Modernisation Drive</a></li>
                <li><a href="#">Latest Development of Public Importance</a></li>
              </ul>
            </li> -->
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->
    