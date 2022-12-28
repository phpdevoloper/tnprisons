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
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>Title</th>
                          <th>English</th>
                          <th>Tamil</th>
                          <!-- <th>Page Action</th> -->
                      </tr>
                  </thead>
                  <tbody>
                  <?php 
                  try {

                      $sql = "SELECT * FROM public.sub_menus WHERE cate_code='1' ORDER BY menu_id ASC";
                      $res = pg_query($db,$sql);
                      foreach (pg_fetch_all($res) as $row) { ?>
                          <tr>
                          <td><?php echo $row["menu_name_en"]; ?></td>
                          <td>
                            <?php if (empty($row["menu_name_en"])) { ?>
                              <a href="#"><i class="fas fa-plus"></i></a>
                            <?php } else { ?>
                              <a href="#" class="edit_page" data-toggle="modal" data-target="#eng-modal" data-menu_id="<?php echo $row["menu_id"];?>"
                              data-menu_name_en="<?php echo $row["menu_name_en"];?>">
                              <i class="fas fa-edit"></i></a>
                            <?php } ?>
                          </td>
                          <td>
                            <?php if (empty($row["menu_name_ta"])) { ?>
                              <a href="#"><i class="fas fa-plus"></i></a>
                            <?php } else { ?>
                              <a href="#" class="edit_page_ta" data-toggle="modal" data-target="#ta-modal" data-menu_id="<?php echo $row["menu_id"];?>"
                              data-menu_name_ta="<?php echo $row["menu_name_ta"];?>"><i class="fas fa-edit" ></i></a>
                            <?php } ?>
                          </td>
                      </tr>
                  <?php }
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
      <!-- Modal -->
      <div class="modal fade" id="eng-modal">
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
      <div class="modal fade" id="ta-modal">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="page_title_ta"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="form-group col-lg-12">
                  <input type="hidden" class="form-control" name="page_id_ta" id="page_id_ta">
                  <textarea id="summernote_ta"></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary update_content_ta">Save changes</button>
            </div>
          </div>
        </div>
      </div>
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
  $('#summernote_ta').summernote({
    height: 300,
    focus: true
  });
});
</script>
<?php } else {
  header("Location:index.php");
}
?>
