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
                    <div class="form-group col-lg-6">
                      <input type="hidden" class="form-control" name="menu_id" id="menu_id" placeholder="Enter the name">
                  </div>
                    <div><button type="submit" class="btn btn-primary updateAbout">Update</button></div>
                </div>
                <div class="card-footer">
                </div>
            </div>
      </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.modal -->
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
