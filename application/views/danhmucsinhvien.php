<?php include 'checkLogin.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Danh mục sinh viên</title>
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
          <h3>Quản lí sinh viên</h3>
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
                      <!---->
                      <div class="row">
                        <div class="col-md-2" style="text-align: right">
                          <p style="font-size: 12pt; margin-top: 5px">Chọn lớp</p>
                        </div>
                        <div class="col-md-5" style="text-align: center;">
                          <!--Chọn mã lớp-->
                          <div class="form-group">
                            <select class="form-control form-control-sm selectClass" id="exampleFormControlSelect1">
                              <?php
                                if($query != null){
                                  for($i = 0; $i < count($query); $i++){
                                    ?>
                                    <option value="<?= $query[$i]['MALOP'] ?>"><?= $query[$i]['TENLOP'] ?></option>
                                    <?php
                                  }
                                }
                              ?>
                              
                            </select>
                          </div>
                        </div>
                        <!--Button Thêm sinh viên-->
                        <div class="col-md-5" style="text-align: center;">
                          <button class="btn btn-success btn-add" style="width: 60%; display: inline-block;">Thêm sinh viên</button>
                          <button class="btn btn-success btn-save-student" style="width: 60%; display: none">Lưu</button>
                        </div>
                      </div>

                      <!--Div thêm sinh viên-->
                      <div class="row" style="border-style: solid; border-width: 1px; border-radius: 8px; padding-top: 25px; padding-right: 30px; padding-bottom: 20px; display : none">
                        <div class="col-1">
                          <p style="font-size: 12pt; margin-top: 5px; float: left;">MSSV</p>
                        </div>
                        <div class="col-2">
                          <input type="text" name="" class="form-control">
                        </div>
                        <div class="col-1">
                          <p style="font-size: 12pt; margin-top: 5px; float: left;">Họ</p>
                        </div>
                        <div class="col-3">
                          <input type="text" name="" class="form-control">
                        </div>
                        <div class="col-1">
                          <p style="font-size: 12pt; margin-top: 5px; float: right;">Tên</p>
                        </div>
                        <div class="col-4">
                          <input type="text" name="" class="form-control">
                        </div>

                        <div class="col-1">
                          <p style="font-size: 12pt; margin-top: 5px; float: left;">Phái</p>
                        </div>
                        <div class="col-2">
                          <input type="radio" value="1" name="sex[]" checked=""><p>&nbsp;Nam</p>
                        </div>
                        <div class="col-1">
                          <input type="radio" value="0" name="sex[]"><p>&nbsp;Nữ</p>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2">
                          <p style="font-size: 12pt; margin-top: 5px; float: right;">Ngày sinh</p>
                        </div>
                        <div class="col-4">
                          <input type="date" name="" class="form-control">
                        </div>
                        <div class="col-2">
                          <p style="font-size: 12pt; margin-top: 5px; float: left;">Nơi sinh</p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="" class="form-control">
                        </div>
                        <div class="col-2">
                          <p style="font-size: 12pt; margin-top: 5px; float: left;">Địa chỉ</p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="" class="form-control">
                        </div>
                      </div>

                      <!--Table nhập liệu-->
                      <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body abc" style="text-align: center; width: 70vw">
                            <div class="table-responsive" >
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>
                                      STT
                                    </th>
                                    <th>
                                      MSSV
                                    </th>
                                    <th>
                                      Họ
                                    </th>
                                    <th >
                                      Tên
                                    </th>
                                    <th>
                                      Giới tính (Nam|Nữ)
                                    </th>
                                    <th>
                                      Ngày sinh
                                    </th>
                                    <th>
                                      Nơi sinh
                                    </th>
                                    <th>
                                      Địa chỉ
                                    </th>
                                    <th>
                                      Nghỉ học
                                    </th>
                                    <th>
                                      Tác vụ
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
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
  <script src="<?= base_url() ?>Build/js/ajax/ajaxdanhmucsinhvien.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>