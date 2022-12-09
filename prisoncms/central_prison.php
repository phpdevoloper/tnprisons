<?php include("inc/header.php");
include_once 'inc/DBConnection.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Central Prison</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Central Prison</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Central Prison</h3>
                <div class="float-right">
                    <button type="button" class="btn btn-block btn-primary btn-sm"><i class="fa fa-plus" style="padding-right:5px;"></i>Add New</button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Prison Name</th>
                        <th>Prison Location</th>
                        <th>Prison District</th>
                        <th>Prison Jurisdiction</th>
                        <th>Prison Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        try
                        {
                            $database = new DBConnection();
                            $db = $database->openConnection();
                            $sql = "SELECT * FROM prisons_in_tamilnadu WHERE prison_type = 'cp'  ORDER BY prison_id ASC" ;
                            foreach ($db->query($sql) as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row["prison_name"]; ?></td>
                        <td><?php echo $row["prison_locan"]; ?></td>
                        <td><?php echo $row["prison_dist"]; ?></td>
                        <td><?php echo $row["prison_jurisd"]; ?></td>
                        <td><?php echo $row["prison_addr"]; ?></td>
                    </tr>
                    <?php }
                    }
                    catch (PDOException $e)
                    {
                        echo "There is some problem in connection: ". $e->getMessage();
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include("inc/footer.php");?>