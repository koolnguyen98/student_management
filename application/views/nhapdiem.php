<?php include 'checkLogin.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Nhập điểm sinh viên</title>
  <!-- plugins:css -->
  <?php include("template/headerView.php") ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:<?= base_url() ?>Build/partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?= base_url() ?>Build/index.html">
          <img src="<?= base_url() ?>Build/images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url() ?>Build/index.html">
          <img src="<?= base_url() ?>Build/images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <div class="navbar-nav">
          <h3>Quản lí điểm sinh viên</h3>
        </div>
        
        <?php include("template/body_headerView.php") ?>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:<?= base_url() ?>Build/partials/_sidebar.html -->
      <?php include("template/navView.php") ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">

                        <div class="col-md-5">
                          <!--Chọn tên lớp-->
                          <div class="form-group">
                            <label for="exampleFormControlSelect1" style="margin-bottom: 22px">Tên lớp</label>
                            <select class="form-control form-control-sm select-name-class select" id="exampleFormControlSelect1">
                              <option value="">Chọn tên lớp</option>
                              <?php
                                if($query1 != null){
                                  for($i = 0; $i < count($query1); $i++){
                                    ?>
                                      <option value="<?= $query1[$i]['MALOP'] ?>"><?= $query1[$i]['TENLOP'] ?></option>
                                    <?php
                                  }
                                }
                              ?>
                            </select>
                          </div>
                        </div>

                        <!--Nhập Môn học-->
                        <div class="col-md-5">
                          <!--Chọn tên lớp-->
                          <div class="form-group">
                            <label for="exampleFormControlSelect1" style="margin-bottom: 22px">Môn học</label>
                            <select class="form-control form-control-sm select-name-subject select" id="exampleFormControlSelect1">
                              <option value="">Chọn môn học</option>
                              <?php
                                if($query2 != null){
                                  for($i = 0; $i < count($query2); $i++){
                                    ?>
                                      <option value="<?= $query2[$i]['MAMH'] ?>"><?= $query2[$i]['TENMH'] ?></option>
                                    <?php
                                  }
                                }
                              ?>
                            </select>
                          </div>
                        </div>

                        <!--Chọn số lần thi, 1 or 2-->
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1" style="margin-bottom: 22px">Lần thi</label>
                            <select class="form-control form-control-sm select-times select" id="exampleFormControlSelect1">
                              <option value="1">1</option>
                              <option value="2">2</option>
                            </select>
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        <div class="col-12" style="text-align: center;">
                          <button class="btn btn-success btn-start" style="width: 15%; display: inline-block;">Bắt đầu</button>
                          <button class="btn btn-success btn-save" style="width: 15%; display: none">Lưu</button>
                        </div>
                      </div>

                      <!--Table nhập liệu-->
                      <div class="col-lg-12 grid-margin stretch-card div-mark" style="display: none">
                        <div class="card">
                          <div class="card-body" style="text-align: center">
                            <div class="table-responsive">
                              <table class="table table-hover table-mark">
                                <thead>
                                  <tr>
                                    <th>
                                      STT
                                    </th>
                                    <th>
                                      Mã số sinh viên
                                    </th>
                                    <th>
                                      Họ và tên
                                    </th>
                                    <th>
                                      Điểm
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                  
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div> <!--Table nhập liệu-->

                    </div> <!--Card-body-->
                  </div> <!--Card-->
                </div> <!--col-12-->

              </div> <!--row-flexrow-->
            </div> <!--grid margin-->

          </div> <!--row-->
        </div>
        <input type="hidden" id="base" value="<?= base_url() ?>">
        <!-- content-wrapper ends -->
        <!-- partial:<?= base_url() ?>Build/partials/_footer.html -->
        <?php include("template/body_footerView.php") ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url() ?>Build/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url() ?>Build/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url() ?>Build/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>Build/js/misc.js"></script>
  <script src="<?= base_url() ?>Build/js/ajax/ajaxnhapdiem.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>