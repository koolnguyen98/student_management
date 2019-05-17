<?php include 'checkLogin.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>In danh sách sinh viên</title>
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
          <h3>In danh sách sinh viên</h3>
        </div>
        
        <?php include("template/body_headerView.php") ?>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:<?= base_url() ?>Build/partials/_sidebar.html -->
     
      <!-- partial -->
      <div class="main-panel col-12">
        <div class="content-wrapper full-page-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <!---->
                      <div style="text-align: center;">
                        <h2><b>Danh sách sinh viên</b></h2>
                      </div><br>
                      <div class="row">
                      	<div class="col-3"></div>
                      	<div class="col-6" style='text-align: center;'>
                          <label>Chọn lớp</label>
                          <select class="form-control" style="width: 300px;margin: auto;">
                            <option value="">Chọn lớp</option>
                            <?php
                              if(isset($query)){
                                if(count($query) > 0){
                                  for($i = 0; $i < count($query); $i++){
                                    ?>
                                      <option value="<?= $query[$i]['MALOP'] ?>"><?= $query[$i]['TENLOP'] ?></option>
                                    <?php
                                  }
                                }
                              }
                            ?>
                          </select>
                        </div>
                        <div class="col-3"></div>
                      </div><br>

                      <div class="row div-inf" style="display: none">

                      </div>
                      

                      <!--Table nhập liệu-->
                       <div class="col-lg-12 grid-margin stretch-card div-student" style="display: none;">
                          <div class="card">
                            <div class="card-body" style="text-align: center">
                              <div class="table-responsive" style="overflow-x: scroll;">
                                <table class="table table-bordered">
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
                                      <th>
                                        Tên
                                      </th>
                                      <th>
                                        Giới tính
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
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                    
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div> <!--Table nhập liệu-->
                        <div class="div-btn" style="text-align: right; display: none" >
                          <a class="btn btn-success" style="display: inline-block;" href="<?= base_url()?>Welcome/write2Excel">In</a>
                          <a class="btn btn-primary" style="display: inline-block;" href="<?= base_url()?>Welcome/viewDanhmuclop">Trở về</a>
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
  <script src="<?= base_url() ?>Build/js//ajax/ajaxindanhsachsinhvien.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>