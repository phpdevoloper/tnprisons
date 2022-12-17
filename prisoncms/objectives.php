<?php 
session_start(); 
if (isset($_SESSION)) {
include("inc/header1.php");
include_once 'inc/DBConnection.php';
$database = new DBConnection();
$db = $database->openConnection();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="menu.php">About Us</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <textarea id="summernote">
                    Place <em>some</em> <u>text</u> <strong>here</strong>
                    </textarea>
                    <div><button type="submit" class="btn btn-primary">Update</button></div>
                </div>
                <div class="card-footer">
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
                              <?php $sth = $db->prepare("SELECT * FROM districts_tn_list ORDER BY dis_id ASC ");
                                $sth->execute();
                                $result = $sth->fetchAll();
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
                        <?php $sth = $db->prepare("SELECT * FROM prison_types ORDER BY prison_type_id ASC");
                              $sth->execute();
                              $result = $sth->fetchAll();
                              foreach ($result as $row) {
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
    <?php include("inc/footer.php");?>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote(
    )
  })
</script>
<?php } else{
  header("Location:index.php");
}
?>
