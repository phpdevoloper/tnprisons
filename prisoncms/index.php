<?php include("inc/login_header.php"); ?>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><img class="dept_logo" src="assets/images/logo/TamilNadu_Logo.png" alt="No image"> </a>
      <p style="font-weight:700;">Department of Prisons and Correctional Services</p>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="login_form">
        <div class="input-group mb-3">
          <input type="text" name="user_name" class="form-control" placeholder="user_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="user_pass" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <img src="captcha/image.php" alt="CAPTCHA" id="image-captcha">
          <a href="#" id="refresh-captcha" class="align-middle" title="refresh"><span class="fas fa-redo-alt align-middle"
           style="margin-left: 20px; color:brown"></span></a>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="token" id="token" class="form-control" placeholder="Enter the captch">
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<?php include("inc/login_footer.php"); ?>
<script type="text/javascript">
		var refreshButton = document.getElementById("refresh-captcha");
		var captchaImage = document.getElementById("image-captcha");

		refreshButton.onclick = function(event) {
			event.preventDefault();
			captchaImage.src = './captcha/image.php?' + Date.now();
		};
	</script>