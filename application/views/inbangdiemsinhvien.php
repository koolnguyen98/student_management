<?php include 'checkLogin.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>In bảng điểm sinh viên</title>
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
          <h3>In bảng điểm sinh viên</h3>
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
                      <div class="row">
                        <div class="col-6" style='text-align: center;'>
                          <label>Chọn lớp</label>
                          <select class="form-control select" style="width: 300px;margin: auto;">
                            <option value="">---------</option>
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

                        <div class="col-6" style='text-align: center;'>
                          <label>Tìm kiếm bằng mã sinh viên</label>
                          <div class="form-group">
                            <div class="input-group" style="width: 400px; margin: auto;">
                              <input type="text" class="form-control" placeholder="Mã số sinh viên" aria-label="Username" aria-describedby="colored-addon3">
                              <div class="input-group-append bg-primary border-primary">
                                <button class="btn btn-primary btn-search" disabled="">
                                  Tìm kiếm
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row table-student" style="display: none">
             <!--Table nhập liệu-->
          </div><br>


            <div class="row mark-table" style="display: none">
              <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body mark-body">

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
      <script src="<?= base_url() ?>Build/js/ajax/ajaxinbangdiemsinhvien.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <!-- End custom js for this page-->
    </body>

    </html>