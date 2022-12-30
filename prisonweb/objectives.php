<?php

include("inc/DBConnection.php"); 
include("session_lang.php");
$sql = "SELECT * FROM sub_menus WHERE menu_id='".$_SESSION['menu_id']."'";
$res = pg_query($db,$sql);
$menus = pg_fetch_assoc($res);
?>
    <main>
        <div class="banner-wrapper innerBanner">
            <img src="https://cdnbbsr.s3waas.gov.in/s3978d76676f5e7918f81d28e7d092ca0d/uploads/2021/03/2021030248.jpg" alt="">
        </div>
        <div class="container py-5">
            <div class="row">
               <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                  <div id="breadcrumb" class="push-left" role="navigation" aria-label="breadcrumb">
                     <ul class="breadcrumbs">
                        <li><a href="#" class="home"><span>Home</span></a></li>
                        <li><a href="#">About Us</a></li>
                        <li class="current"><?php echo $menus["menu_name_".$_SESSION['lang'].""];?></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="page-head">
                <div class="text-center section-title">
                    <p><?php echo $menus["menu_name_".$_SESSION['lang'].""];?></p>
                </div>
            <div>
            <?php 
                $sql = "SELECT * FROM page_content WHERE page_id ='".$_SESSION['menu_id']."'  ORDER BY content_id ASC"; 
                $res = pg_query($db,$sql);
                $page_content = pg_fetch_assoc($res);
                echo $page_content["page_content_".$_SESSION['lang'].""];
            ?>
            </div>
        </div>
        <div class="separator50"></div>
    </main>
<?php include("inc/simple_footer.php"); ?>