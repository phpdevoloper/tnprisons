<?php 
session_start(); 
if (isset($_SESSION)) {
include("inc/header1.php");
include_once 'inc/DBConnection.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="menu.php">Menu</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add New Menu</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Menu Name(EN)</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Menu Name(TA)</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label>Parent Menu Items</label>
                  <select class="form-control">
                    <option>None</option>
                    <?php 
                    try
                    {
                        $sql = "SELECT * FROM public.menus ORDER BY menu_id ASC";
                        foreach (pg_query($db,$sql) as $row) {  ?>
                          <option value="<?php echo $row["menu_id"]; ?>"><?php echo $row["menu_name_en"]; ?></option>
                    <?php   }
                    }
                    catch (PDOException $e)
                    {
                        echo "There is some problem in connection: ". $e->getMessage();
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="card-footer" style="text-align:end">
                <button type="submit" class="btn btn-info">Submit</button>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Main Menus</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <tr>
                        <th>S.No</th>
                        <th>Menu Name(EN)</th>
                        <th>Menu Name(TAM)</th>
                      </tr>
                    </tr>
                  </thead>
                  <tbody>
                  <?php try
                    {
                        $i = 1;
                        $sql = "SELECT * FROM public.menus ORDER BY menu_id ASC";
                        foreach (pg_query($db,$sql) as $row) { ?>
                          <tr>
                          <th><?php echo $i; ?></th>
                          <th><?php echo $row["menu_name_en"]; ?></th>
                          <th><?php echo $row["menu_name_ta"]; ?></th>
                        </tr>
                    <?php  $i++; }
                    }
                    catch (PDOException $e)
                    {
                        echo "There is some problem in connection: ". $e->getMessage();
                    }?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add New Prison</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="addPrison_form">
          <div class="modal-body">
              <div class="row">
                  <div class="form-group col-lg-6">
                      <label for="exampleInputEmail1">Prison Name</label>
                      <input type="text" class="form-control" name="prison_name" id="prison_name" placeholder="Enter the name">
                  </div>
                  <div class="form-group col-lg-6">
                      <label for="exampleInputEmail1">Prison Location</label>
                      <input type="text" class="form-control" name="prison_location" id="prison_location" placeholder="Enter the location">
                  </div>
                  <div class="form-group col-lg-6">
                      <label for="exampleInputEmail1">Prison District</label>
                      <select class="form-control" name="prison_district" id="prison_district">
                          <option value="">Please select district</option>
                              <?php $sth = "SELECT * FROM districts_tn_list ORDER BY dis_id ASC ";
                                $data = pg_query($db,$sth);
                                $result = pg_fetch_all($data);
                                foreach ($result as $row) {
                              ?>
                          <option value="<?php echo $row['district_short_code']?>"><?php echo $row['district_name']?></option>
                          <?php  } ?>
                      </select>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="exampleInputEmail1">Prison Type</label>
                    <select class="form-control" name="prison_type" id="Prison_type">
                        <option value="">Please select prison type</option>
                        <?php $sth = "SELECT * FROM prison_types ORDER BY prison_type_id ASC";
                              $data = pg_query($db,$sth);
                              $res = pg_fetch_all($data);
                              foreach ($res as $row) {
                            ?>
                        <option value="<?php echo $row['prison_code']?>"><?php echo $row['prison_type']?></option>
                        <?php  } ?>
                    </select>
                  </div>
                  <div class="form-group col-lg-6">
                      <label for="exampleInputEmail1">Prison Jurisdiction</label>
                      <input type="text" class="form-control" name="prison_juri" id="prison_juri" placeholder="Enter the jusrisdiction">
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="exampleInputEmail1">Prison Address</label>
                    <textarea class="form-control" name="prison_address" id="prison_address" cols="30" rows="3" placeholder="Enter the address"></textarea>
                  </div>
              </div>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    <!-- /.modal -->
<?php include("inc/footer.php");
}else{
  header("Location:index.php");
}
?>
