<?php 
include("inc/header1.php");
include_once 'inc/DBConnection.php';
$database = new DBConnection();
$db = $database->openConnection();
$prison_type = $_SESSION['prison_type'];
// $sql = "SELECT * FROM prison_types WHERE prison_type = :prison_type ORDER BY prison_type_id ASC" ;
// $stmt = $db->prepare("SELECT * FROM prison_types WHERE prison_code = :prison_type");
// $stmt->execute(['prison_type' => $prison_type]); 
// $user = $stmt->fetch();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reformation of Prisoners</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php //echo $user['prison_type']; ?></li>
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
                <h3 class="card-title"><?php //echo $user['prison_type']; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <textarea id="summernote" cols="30" rows="3"></textarea>
                <button type="button" class="btn bg-gradient-primary btn-sm">Submit</button>
                <button type="button" class="btn bg-gradient-danger btn-sm">Cancel</button>
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
  <script type="text/javascript">
    $('textarea#summernote').summernote({
        placeholder: 'Type here........',
        tabsize: 2,
        height: 500,
        toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                //['fontname', ['fontname']],
            // ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']],
                //['view', ['fullscreen', 'codeview']],
                ['help', ['help']]
            ],
      });
  </script>