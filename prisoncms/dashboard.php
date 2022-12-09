  <?php 
  include_once 'inc/DBConnection.php';
  include("inc/header1.php"); 
  if (isset($_SESSION["user_data"])) {
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Prison Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-6 col-sm-2">
            <?php 
              $sql = "SELECT prisons_in_tamilnadu.*,prison_types.prison_type from prison_types 
              join prisons_in_tamilnadu on prisons_in_tamilnadu.prison_type = prison_types.prison_code
              where prison_types.prison_code = 'cp'";
              $sth = $db->query($sql);
              $res = $sth->fetch();
            ?>
            <div class="info-box menu_a" data-page_title = "<?php echo $res["prison_type"];?>" data-prison_code = "cp">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Central Prisons</span>
                <span class="info-box-number">
                <?php echo $sth->rowCount(); ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-6 col-sm-2">
          <?php 
              $sql = "SELECT prisons_in_tamilnadu.*,prison_types.prison_type from prison_types 
              join prisons_in_tamilnadu on prisons_in_tamilnadu.prison_type = prison_types.prison_code
              where prison_types.prison_code = 'spw'";
              $sth = $db->query($sql);
              $result = $sth->fetch();
            ?>
            <div class="info-box mb-3 menu_a" data-page_title = "<?php echo $result["prison_type"];?>" data-prison_code ="spw">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <p class="info-box-text">SP for women</p>
                <span class="info-box-number"> <?php echo $sth->rowCount(); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-6 col-sm-2">
          <?php 
              $sql = "SELECT prisons_in_tamilnadu.*,prison_types.prison_type from prison_types 
              join prisons_in_tamilnadu on prisons_in_tamilnadu.prison_type = prison_types.prison_code
              where prison_types.prison_code = 'bs'";
              $sth = $db->query($sql);
              $result = $sth->fetch();
            ?>
            <div class="info-box mb-3 menu_a" data-page_title = "<?php echo $result["prison_type"];?>" data-prison_code ="bs">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Borstal School</span>
                <span class="info-box-number"><?php echo $sth->rowCount(); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-6 col-sm-2">
          <?php 
              $sql = "SELECT prisons_in_tamilnadu.*,prison_types.prison_type from prison_types 
              join prisons_in_tamilnadu on prisons_in_tamilnadu.prison_type = prison_types.prison_code
              where prison_types.prison_code = 'dj'";
              $sth = $db->query($sql);
              $result = $sth->fetch();
            ?>
            <div class="info-box mb-3 menu_a" data-page_title = "<?php echo $result["prison_type"];?>" data-prison_code ="dj">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">District Jails</span>
                <span class="info-box-number"><?php echo $sth->rowCount(); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-6 col-sm-2">
          <?php 
              $sql = "SELECT prisons_in_tamilnadu.*,prison_types.prison_type from prison_types 
              join prisons_in_tamilnadu on prisons_in_tamilnadu.prison_type = prison_types.prison_code
              where prison_types.prison_code = 'sj'";
              $sth = $db->query($sql);
              $result = $sth->fetch();
            ?>
            <div class="info-box menu_a" data-page_title = "<?php echo $result["prison_type"];?>" data-prison_code ="sj">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sub Jails</span>
                <span class="info-box-number">
                <?php echo $sth->rowCount(); ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-6 col-sm-2">
          <?php 
              $sql = "SELECT prisons_in_tamilnadu.*,prison_types.prison_type from prison_types 
              join prisons_in_tamilnadu on prisons_in_tamilnadu.prison_type = prison_types.prison_code
              where prison_types.prison_code = 'ssj'";
              $sth = $db->query($sql);
              $result = $sth->fetch();
            ?>
            <div class="info-box menu_a" data-page_title = "<?php echo $result["prison_type"];?>" data-prison_code ="ssj">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">SP Sub Jails</span>
                <span class="info-box-number">
                <?php echo $sth->rowCount(); ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-6 col-sm-2">
          <?php 
              $sql = "SELECT prisons_in_tamilnadu.*,prison_types.prison_type from prison_types 
              join prisons_in_tamilnadu on prisons_in_tamilnadu.prison_type = prison_types.prison_code
              where prison_types.prison_code = 'oaj'";
              $sth = $db->query($sql);
              $result = $sth->fetch();
            ?>
            <div class="info-box menu_a" data-page_title = "<?php echo $result["prison_type"];?>" data-prison_code ="oaj">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Open Air Prisons</span>
                <span class="info-box-number">
                <?php echo $sth->rowCount(); ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <h5>PRISONS POPULATION</h5>
        <div class="row">
          <div class="col-lg-6 text-center mb-3">Authorised Accommodation</div>
          <div class="col-lg-6 text-center mb-3">Actual Prison Population</div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-2">
            <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Male</span>
                <span class="info-box-number">
                  21044
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-6 col-sm-2">
            <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">  
                <span class="info-box-text">Female</span>
                <span class="info-box-number">2548</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-6 col-sm-2">
            <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total</span>
                <span class="info-box-number">23592</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-6 col-sm-2">
            <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Male</span>
                <span class="info-box-number">13985</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-6 col-sm-2">
            <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Female</span>
                <span class="info-box-number">611</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-6 col-sm-2">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total</span>
                <span class="info-box-number">14596</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("inc/footer.php");
  }
  // else{
  //   header("Location: index.php");
  // }
  ?>