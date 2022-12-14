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
            <h1>About Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="menu.php">About Us</a></li>
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
                <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i> Add New</button>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-striped">
                  <thead>
                      <tr>
                          <!-- <th>Menu</th> -->
                          <th>Menu Name(EN)</th>
                          <th>Menu Name(TAM)</th>
                          <th>Page Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php try
                  {
                      $sql = "SELECT * FROM public.sub_menus WHERE cate_code='1' ORDER BY menu_id ASC";
                      $res = pg_query($db,$sql);
                      foreach (pg_fetch_all($res) as $row) { ?>
                          <tr>
                          <!-- <td><a href="objectives.php"><?php //echo $row["menu_name_en"]; ?></a></td> -->
                          <td>
                            <?php if (empty($row["menu_name_en"])) { ?>
                              <a href="#"><i class="fas fa-plus"></i></a>
                            <?php } else { ?>
                              <?php echo $row["menu_name_en"]; ?> <a href="#" class="editMenu" data-toggle="modal" data-target="#menu-edit" data-menu_id="<?php echo $row["menu_id"];?>"
                              data-menu_name_en="<?php echo $row["menu_name_en"];?>">
                              <i class="fas fa-edit" style="bacground-color:#bd2130;"></i></a>
                            <?php } ?>
                          </td>
                          <td>
                            <?php if (empty($row["menu_name_ta"])) { ?>
                              <a href="#"><i class="fas fa-plus"></i></a>
                            <?php } else { ?>
                              <?php echo $row["menu_name_ta"]; ?><a href="#" class="editMenu" data-toggle="modal" data-target="#menu-edit_ta" data-menu_id="<?php echo $row["menu_id"];?>"
                              data-menu_name_en="<?php echo $row["menu_name_ta"];?>"><i class="fas fa-edit"></i></a>
                            <?php } ?>
                          </td>
                          <td class="py-0 align-middle">
                          <div class="btn-group btn-group-sm">
                            <a href="javascript:void(0);" class="btn btn-info edit_page" data-toggle="modal" data-target="#about-modal"
                            data-menu_id ="<?php echo $row["menu_id"];?>" data-page_name="<?php echo $row["menu_name_en"];?>"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);" class="toat btn btn-danger"><i class="fa fa-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                  <?php }
                  }
                  catch (PDOException $e)
                  {
                      echo "There is some problem in connection: ". $e->getMessage();
                  }?>
                  
                  </tbody>
                  <!-- Modal -->
                  <div class="modal fade" id="menu-edit">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Menu(EN)</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form class="edit_Menu">
                          <div class="modal-body">
                            <div class="row">
                              <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1">Menu Name</label>
                                <input type="hidden" class="form-control" name="menu_id" id="menu_id">
                                <textarea class="form-control" name="menu_name_en" id="menu_name_en" cols="30" rows="5"></textarea>
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
                  <!-- Modal -->
                  <!-- Modal -->
                  <div class="modal fade" id="menu-edit_ta">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Menu(TA)</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form class="edit_Menu">
                          <div class="modal-body">
                            <div class="row">
                              <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1">Menu Name</label>
                                <input type="hidden" class="form-control" name="menu_id" id="Menu_id">
                                <textarea class="form-control" name="menu_name_ta" id="menu_name_ta" cols="30" rows="5"></textarea>
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
                  <!-- Modal -->
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Modal -->
      <div class="modal fade" id="about-modal">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="page_title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="form-group col-lg-12">
                  <input type="hidden" class="form-control" name="page_id" id="page_id">
                  <textarea id="summernote"></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary update_content">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
    </section>
    <!-- /.content -->
  </div>
<?php include("inc/footer.php");?>
<script>
$(function () {
  // Summernote
  $('#summernote').summernote({
    height: 300,
    focus: true
  });
});
</script>
<?php } else {
  header("Location:index.php");
}
?>
