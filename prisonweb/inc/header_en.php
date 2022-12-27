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
    <div id="top-bar" class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="push-right">
              <div id="accessibility">
                <ul id="accessibilityMenu">
                  <li>
                      <a href="#SkipContent" class="skipContent" aria-label="Skip to main content" title="Skip to main content">
                          <span class="m-hide">Skip to main content</span>
                          <span class="icon-skip-to-main m-show"></span>
                      </a>
                  </li>
                  <li class="social-media">
                    <a href="javascript:void(0);" class="social-group-icon" title="Social Media Links" aria-label="Social Media Links" role="button" data-toggle="dropdown">
                        <img class="show-con" src="https://governoruk.gov.in/wp-content/themes/sdo-theme/images/social_media.svg" title="Social Icon" alt="Social Icon">
                        <span class="hide">Social Media Links</span>
                    </a>
                    <ul class="socialIcons">
                      <li><a href="https://www.facebook.com/LtGenGurmitSingh" target="_blank" aria-label="Facebook | External site that opens in a new window" onclick="return confirm('You are being redirected to an external website. Please note that RAJBHAWAN UTTARAKHAND cannot be held responsible for external websites content &amp; privacy policies.');" title="https://www.facebook.com/LtGenGurmitSingh - External site that opens in a new window"><img src="https://governoruk.gov.in/wp-content/themes/sdo-theme/images/facebook_icon.svg" title="Facebook | External site that opens in a new window" alt="Facebook, External Link that opens in a new window"></a></li>
                      <li><a href="https://twitter.com/LtGenGurmit?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" aria-label="Twitter | External site that opens in a new window" onclick="return confirm('You are being redirected to an external website. Please note that RAJBHAWAN UTTARAKHAND cannot be held responsible for external websites content &amp; privacy policies.');" title="https://twitter.com/LtGenGurmit?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor - External site that opens in a new window"><img src="https://governoruk.gov.in/wp-content/themes/sdo-theme/images/twitter_icon.svg" title="Twitter | External site that opens in a new window" alt="Twitter, External Link that opens in a new window"></a></li>
                      <li><a href="https://www.instagram.com/ltgengurmitsingh" target="_blank" aria-label="Instagram | External site that opens in a new window" onclick="return confirm('You are being redirected to an external website. Please note that RAJBHAWAN UTTARAKHAND cannot be held responsible for external websites content &amp; privacy policies.');" title="https://www.instagram.com/ltgengurmitsingh - External site that opens in a new window"><img src="https://governoruk.gov.in/wp-content/themes/sdo-theme/images/instagram_icon.svg" title="Instagram | External site that opens in a new window" alt="Instagram, External Link that opens in a new window"></a></li>
                      <li><a href="https://www.youtube.com/channel/UCCx7DD2c77WsbfXO5HHxVsA" target="_blank" aria-label="Youtube | External site that opens in a new window" onclick="return confirm('You are being redirected to an external website. Please note that RAJBHAWAN UTTARAKHAND cannot be held responsible for external websites content &amp; privacy policies.');" title="https://www.youtube.com/channel/UCCx7DD2c77WsbfXO5HHxVsA - External site that opens in a new window"><img src="https://governoruk.gov.in/wp-content/themes/sdo-theme/images/youtube_icon.svg" title="Youtube | External site that opens in a new window" alt="youtube, External Link that opens in a new window"></a></li>
                    </ul>
                  </li>
                  <li class="top-sitemap mFocus">
                    <a href="https://governoruk.gov.in/sitemap/" aria-label="Sitemap" title="Sitemap" class="mFocus">
                    <img class="show-con" src="https://governoruk.gov.in/wp-content/themes/sdo-theme/images/sitemap_icon.svg" title="Sitemap Icon" alt="Sitemap Icon">
                    <span class="hide">Sitemap</span></a>
                  </li>
                  <li class="">
                    <a href="javascript:void(0);" title="Accessibility Links" aria-label="Accessibility Links" class="accessible-icon mFocus" role="button" data-toggle="dropdown"><span class="tcon">Accessibility Links</span>
                        <img class="show-con" src="https://governoruk.gov.in/wp-content/themes/sdo-theme/images/accessibility_icon.svg" title="Accessibility Icon" alt="Accessibility Icon">
                    </a>
                    <ul class="accessiblelinks textSizing visible" aria-label="Font size and Contrast controls">
                        <li class="fontSizeEvent"><a data-selected-text="selected" data-event-type="increase" href="javascript:void(0);" data-label="Font Size Increase" title="Font Size Increase" aria-label="Font Size Increase"><span aria-hidden="true">A+</span> <span class="tcon">Font Size Increase</span></a></li>
                        <li class="fontSizeEvent"><a data-selected-text="selected" data-event-type="normal" href="javascript:void(0);" data-label="Normal Font" title="Normal Font - selected" aria-label="Normal Font - selected" class="link-selected"><span aria-hidden="true">A</span> <span class="tcon">Normal Font</span></a></li>
                        <li class="fontSizeEvent"><a data-selected-text="selected" data-event-type="decrease" href="javascript:void(0);" data-label="Font Size Decrease" title="Font Size Decrease" aria-label="Font Size Decrease"><span aria-hidden="true">A-</span> <span class="tcon">Font Size Decrease</span></a></li>
                        <li class="highContrast dark tog-con">
                            <a href="javascript:void(0);" title="High Contrast" aria-label="High Contrast"><span aria-hidden="true">A</span> <small class="tcon">High Contrast</small></a>
                        </li>
                        <li class="highContrast light">
                            <a class="" href="javascript:void(0);" title="Normal Contrast - Selected" aria-label="Normal Contrast - Selected"><span aria-hidden="true">A</span> <small class="tcon">Normal Contrast</small></a>
                        </li>
                    </ul>
                  </li>
                  <li class="languageCont" aria-label="Change Language">
                    <a href="javascript:void(0);" class="language link-selected" aria-label="English - Selected" title="English - Selected" role="button" data-toggle="dropdown">English</a>
                    <ul class="socialIcons">
                      <li class="lang-item lang-item-55 lang-item-hi">
                        <a href="#" aria-label="தமிழ்" title="தமிழ்" data-page_title="ta">தமிழ்</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="push-left">
              <div class="govBranding">
                <ul>
                    <!-- <li>
                        <a lang="hi" href="https://uk.gov.in/" onclick="return confirm('You are being redirected to an external website. Please note that RAJBHAWAN UTTARAKHAND cannot be held responsible for external websites content &amp; privacy policies.');" aria-label="उत्तराखंड सरकार - External site that opens in a new window" title="उत्तराखंड सरकार - External site that opens in a new window" target="_blank">
                            Prisons                                     </a>
                    </li> -->
                    <li>
                        <a lang="en" href="#" title="Government of Tamil Nadu - External site that opens in a new window" target="_blank">
                          Government of Tamil Nadu                                   
                        </a>
                    </li>
                </ul>
              </div>        
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar Start -->
    <div id="header" class="header-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
            <div class="logo">
              <a href="https://governoruk.gov.in/" title="Go to home" class="site_logo" rel="home">
                <img id="logo" class="emblem" src="images/logo/TamilNadu_Logo.svg.png" alt="State Emblem of India">
                  <div class="logo_text">
                    <h1 class="h1-logo">Department of Prisons and Correctional Services</h1>
                    <h6>Government of Tamil Nadu</h6>
                  </div>
                </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5">
            <div class="header-right hidden-xs push-right">
              <!-- <a aria-label="Digital India Image - External site that opens in a new window" href="https://www.digitalindia.gov.in/" target="_blank" title="Digital India Image" onclick="return confirm('You are being redirected to an external website. Please note that RAJBHAWAN UTTARAKHAND cannot be held responsible for external websites content &amp; privacy policies.');">
                <img class="sw-logo" src="https://cdnbbsr.s3waas.gov.in/s3978d76676f5e7918f81d28e7d092ca0d/uploads/2019/03/2019031587.png" alt="Digital India">
              </a> -->
            </div>
            <!-- <a class="menuToggle" href="javascript:void(0);"> <span class="icon-menu" aria-hidden="true"></span> <span class="menu-text">Menu Toggle</span> </a> -->
        </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-lg-2 text-center">
            <img class="prison_logo" src="images/logo/TamilNadu_Logo.svg.png" alt=""/>
        </div>
        <div class="col-lg-10 align-items-center">
          <div class="header-title">
            <a href="index.php">
              <h3>Department of Prisons and Correctional Services</h3>
              <h5>Government of Tamil Nadu</h5>
            </a>
          </div>
        </div>
      </div> -->
    </div>
    <div id="menu-bar">
      <div class="container">
        <nav id="navbar" class="navbar">
          <ul>
            <li class="nav-link scrollto"><a href="index.php"><i class="bx bxs-home-alt-2"></a></i></li>
            <?php $sql ="SELECT * FROM menus ORDER BY menu_id ASC";
            foreach ($db->query($sql) as $row) {
            ?>
            <li class="dropdown">
              <a class="nav-link scrollto"><span><?php echo $row['menu_name_en'];?>
              <i class="bi bi-chevron-down"></i>
              </span></a>
              <ul>
                <?php
                  $sql ="SELECT * FROM sub_menus where cate_code='".$row['menu_id']."' ORDER BY menu_id ASC ";
                  foreach ($db->query($sql) as $menus) { ?>
                 <?php if ($menus['cate_code']) { ?>
                        <li><a href="<?php echo $menus['page_url'];?>"><?php echo $menus['menu_name_en'];?></a></li>
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
    <!-- Navbar End -->
    