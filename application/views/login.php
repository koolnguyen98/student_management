<?php
  if(isset($_SESSION['admin'])){
    redirect(base_url(),'refresh');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Đăng nhập | Student Management</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>Build/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>Build/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url() ?>Build/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="<?= base_url() ?>Build/vendors/iconfonts/font-awesome/css/font-awesome.css">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>Build/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() ?>Build/images/logo.png" />
</head>

<body>
	<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <div>
                <div class="form-group" style="text-align: center;">
                  <img src="<?= base_url() ?>Build/images/logo.png" style="width: 50%">
                  <h2><b>Khoa</b></h2>
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option value="1">Công nghệ thông tin</option>
                    <option value="2">Viễn thông</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" style="width: 50%; margin: auto;">Login</button>
                </div>
              </div>
            </div>
            <p>     </p>
            <p class="footer-text text-center">copyright © 2019 Bootstrapdash. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <input type="hidden" id="base" value="<?= base_url() ?>">
    <!-- page-body-wrapper ends -->
  </div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?= base_url() ?>Build/vendors/js/vendor.bundle.base.js"></script>
	<script src="<?= base_url() ?>Build/js/vendor.bundle.addons.js"></script>
	<!-- endinject -->
	<!-- inject:js -->
	<script src="<?= base_url() ?>Build/js/off-canvas.js"></script>
	<script src="<?= base_url() ?>Build/js/misc.js"></script>
  	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="js/index.js"></script>
  <script src="<?= base_url() ?>Build/js/showPwd.js"></script>
	<script src="<?= base_url() ?>Build/js//ajax/ajaxlogin.js"></script>

	<!-- endinject -->
</body>

</html>