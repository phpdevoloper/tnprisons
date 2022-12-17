<?php 
include('inc/DBConnection.php'); 
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
    <div class="container-fluid bg-light p-0">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-map-marker-alt text-primary me-2"></small>
            <small>சிறைகள் மற்றும் சீர்திருத்தப்பணிகள் துறை</small>
          </div>
          <!-- <div class="h-100 d-inline-flex align-items-center py-3">
            <small class="far fa-clock text-primary me-2"></small>
            <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
          </div> -->
        </div>
        <div class="col-lg-4 px-5 text-end">
          <!-- <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="bx bx-phone-call text-primary me-2"></small>
            <small>+012 345 6789</small>
          </div> -->
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
            <nav id="navbar1" class="navbar">
              <ul>
                <li class="dropdown">
                  <a class="nav-link" href="#">தமிழ்</a>
                  <ul>
                    <li><a href="#" data-page_title="en">ENG</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar Start -->
    <div id="header" class="container justify-content-between">
      <div class="row">
        <div class="col-lg-2 text-center">
            <img class="prison_logo" src="images/logo/TamilNadu_Logo.svg.png" alt=""/>
        </div>
        <div class="col-lg-10 align-items-center">
          <div class="header-title">
            <a href="index.php">
              <h3>சிறைகள் மற்றும் சீர்திருத்தப்பணிகள் துறை</h3>
              <h5>தமிழ்நாடு அரசு</h5>
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
              <a class="nav-link scrollto active" href="#hero"><span><?php echo $row['menu_name_ta'];?>
              <!-- <i class="bi bi-chevron-down"></i> -->
              </span></a>
              <ul><?php
                  $sql ="SELECT * FROM sub_menus where cate_code='".$row['menu_id']."' ORDER BY menu_id ASC ";
                  foreach ($db->query($sql) as $menus) { ?>
                 <?php if ($menus['cate_code']) { ?>
                        <li><a href="<?php echo $menus['page_url'];?>"><?php echo $menus['menu_name_ta'];?></a></li>
                    <?php  }else {?>
                    <?php } } ?>
                </ul>
            </li>
            <?php } ?>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </div>