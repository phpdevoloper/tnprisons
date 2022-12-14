<?php 
session_start(); 
if (isset($_SESSION)) {
include("inc/header1.php");
include_once 'inc/DBConnection.php';
$database = new DBConnection();
$db = $database->openConnection();
$prison_type = $_SESSION['prison_type'];
$sql = "SELECT * FROM prison_types WHERE prison_type = :prison_type ORDER BY prison_type_id ASC" ;
$stmt = $db->prepare("SELECT * FROM prison_types WHERE prison_code = :prison_type");
$stmt->execute(['prison_type' => $prison_type]); 
$user = $stmt->fetch();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Prison in TamilNadu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $user['prison_type']; ?></li>
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
                <h3 class="card-title"><?php echo $user['prison_type']; ?></h3>
                <div class="float-right">
                    <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-xl"><i class="fa fa-plus" style="padding-right:5px;"></i>Add New</button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Prison Name</th>
                        <th>Location</th>
                        <th>District</th>
                        <th>Jurisdiction</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        try
                        {
                            $sql = "SELECT * FROM prisons_in_tamilnadu WHERE prison_type = '$prison_type'  ORDER BY prison_id ASC" ;
                            foreach ($db->query($sql) as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row["prison_name"]; ?></td>
                        <td><?php echo $row["prison_locan"]; ?></td>
                        <td><?php echo $row["prison_dist"]; ?></td>
                        <td><?php echo $row["prison_jurisd"]; ?></td>
                        <td><?php echo $row["prison_addr"]; ?></td>
                        <td class="py-0 align-middle">
                          <div class="btn-group btn-group-sm">
                            <a href="javascript:void(0);" class="prison_edit btn btn-info" data-toggle="modal" data-target="#modal-x"
                            data-prison_id      ="<?php echo $row["prison_id"];?>"
                            data-prison_name    ="<?php echo $row["prison_name"];?>"
                            data-prison_locan   ="<?php echo $row["prison_locan"];?>" 
                            data-prison_dist    ="<?php echo $row["prison_dist"];?>"
                            data-prison_type    ="<?php echo $row["prison_type"];?>"
                            data-prison_jurisd  ="<?php echo $row["prison_jurisd"];?>"
                            data-prison_addr    ="<?php echo $row["prison_addr"];?>"
                            ><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);" class="toat btn btn-danger"><i class="fa fa-trash"></i></a>
                          </div>
                        </td>
                    </tr>
                    <?php }
                    }
                    catch (PDOException $e)
                    {
                        echo "There is some problem in connection: ". $e->getMessage();
                    }
                    ?>
                  </tbody>
                  <div class="modal fade" id="modal-x">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Prison</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="prison_edit_form">
                          <div class="modal-body">
                            <div class="row">
                              <div class="form-group col-lg-6">
                                  <label for="exampleInputEmail1">Prison Name</label>
                                  <input type="text" class="form-control" name="prison_name" id="Prison_name" placeholder="Enter the name">
                                  <input type="hidden" class="form-control" name="prison_id" id="Prison_id">
                              </div>
                              <div class="form-group col-lg-6">
                                  <label for="exampleInputEmail1">Prison Location</label>
                                  <input type="text" class="form-control" name="prison_location" id="Prison_location" placeholder="Enter the location">
                              </div>
                              <div class="form-group col-lg-6">
                                  <label for="exampleInputEmail1">Prison District</label>
                                  <select class="form-control" name="prison_district" id="Prison_district">
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
                                  <input type="text" class="form-control" name="prison_juri" id="Prison_juri" placeholder="Enter the jusrisdiction">
                              </div>
                              <div class="form-group col-lg-6">
                                  <label for="exampleInputEmail1">Prison Address</label>
                                  <textarea class="form-control" name="prison_address" id="Prison_address" cols="30" rows="3" placeholder="Enter the address"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
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
<?php include("inc/footer.php");
}else{
  header("Location:index.php");
}
?>