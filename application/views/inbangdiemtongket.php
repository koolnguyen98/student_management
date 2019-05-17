<?php include 'checkLogin.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>In bảng điểm tổng kết</title>
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
          <h3>In bảng điểm tổng kết</h3>
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
                        <h2><b>Bảng điểm tổng kết</b></h2>
                      </div><br>

                      <div class='row'>
                        <div class='col-5'></div>
                        <div class="col-2" style="width: 100px; text-align: center;">
                          <label>Chọn lớp</label>
                          <select class="form-control" style="width: 200px;">
                            <option value="CNPM">Công nghệ phần mềm</option>
                            <option value="TTTM">Tính toán thông minh</option>
                          </select>
                        </div>
                        <div class="col-5"></div>          
                      </div><br>
                      
                      <div class="row div-inf">
                        <div class="col-md-4" style="text-align: center">
                          <p style="font-size: 15pt; margin-top: 5px">Khoa <b>Công nghệ thông tin</b></p>
                        </div>
                        <!--Button Xong-->
                        <div class="col-md-4" style="text-align: center;">
                          <p style="font-size: 15pt; margin-top: 5px">Lớp <b>Công nghệ phần mềm</b></p>
                        </div>
                        <!--Button Thêm sinh viên-->
                        <div class="col-md-4" style="text-align: center;">
                          <p style="font-size: 15pt; margin-top: 5px">Mã lớp <b>16050304</b></p>
                        </div>
                      </div>

                      
                      

                      <!--Table nhập liệu-->
                      <div class="col-lg-12 grid-margin stretch-card div-student">
                        <div class="card">                      
                          <div class="card-body" style="text-align: center">
                            <div class="table-responsive" style="overflow-x: scroll; width: 85vw">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>
                                      <b>STT</b>
                                    </th>
                                    <th>
                                      <b>Mã sinh viên</b>
                                    </th>
                                    <th>
                                      <b>Họ</b>
                                    </th>
                                    <th>
                                      <b>Tên</b>
                                    </th>
                                    <th>
                                      <b>Lập trình web</b>
                                    </th>
                                    <th>
                                      <b>CSDL Phân tán</b>
                                    </th>
                                    <th>
                                      <b>Bảo mật thông tin</b>
                                    </th>
                                    <th>
                                      <b>Xử lí ảnh</b>
                                    </th>
                                     <th>
                                      <b>Lập trình web</b>
                                    </th>
                                    <th>
                                      <b>CSDL Phân tán</b>
                                    </th>
                                    <th>
                                      <b>Bảo mật thông tin</b>
                                    </th>
                                    <th>
                                      <b>Xử lí ảnh</b>
                                    </th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <!--STT-->
                                    <td class="py-1" width="10px">
                                      1
                                    </td>
                                    <!--Môn học-->
                                    <td width="150px" style="text-align: center;">
                                      51603310
                                    </td>
                                    <!--Họ-->
                                    <td width='250px'>
                                      Nguyễn Toàn
                                    </td>
                                    <!--Tên-->
                                    <td width='150px'>
                                      Thiện
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                  </tr> <!--Xong 1 hàng-->

                                  <tr>
                                    <!--STT-->
                                    <td class="py-1" width="10px">
                                      1
                                    </td>
                                    <!--Môn học-->
                                    <td width="150px" style="text-align: center;">
                                      51603310
                                    </td>
                                    <!--Họ-->
                                    <td width='250px'>
                                      Nguyễn Toàn
                                    </td>
                                    <!--Tên-->
                                    <td width='150px'>
                                      Thiện
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                    <!--Điểm-->
                                    <td width='150px'>
                                      10
                                    </td>
                                  </tr> <!--Xong 1 hàng-->

                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div> <!--Table nhập liệu-->
                      <div class="" style="text-align: right;">
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
        <input type="hidden" id="base" value="<?= base_url() ?>">
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
    <script src="<?= base_url() ?>Build/js/ajax/ajaxinbangdiemtongket.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>

  </html>