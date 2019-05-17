<?php include 'checkLogin.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Danh mục lớp</title>
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
          <h3>Quản lí lớp</h3>
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




                      <!--Button Thên lớp-->
                      <div class="row">

                        <div class="col-md-4" style="text-align: center;">

                        </div>

                        <div class="col-md-4" style="text-align: center;">
                          <button class="btn btn-success btn-add" style="width: 80%">Thêm lớp</button>
                        </div>

                        <div class="col-md-4" style="text-align: center;">

                        </div>

                      </div>

                      <div class="row" style="display: none">

                        <div class="col-md-1" style="text-align: center;">

                        </div>

                        <div class="col-md-2" style="text-align: center;">
                          <span style="margin-top: 5px; font-size: 15pt">Mã lớp</span>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                          <input type="" class="form-control" name="" style="background-color: transparent; margin: auto; display: block;" placeholder="Mã lớp">
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                          <span style="margin-top: 5px; font-size: 15pt">Tên lớp</span>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                          <input type="" class="form-control" name="" style="background-color: transparent; margin: auto; display: block;" placeholder="Tên lớp">
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                          <button class="btn btn-success btn-save-class" style="width: 80%">Lưu</button>
                        </div>

                        <div class="col-md-1" style="text-align: center;">

                        </div>

                      </div>

                      <!--Table nhập liệu-->
                      <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body" style="text-align: center">
                            <div class="table-responsive">
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>
                                      STT
                                    </th>
                                    <th>
                                      Tên lớp
                                    </th>
                                    <th>
                                      Số lượng sinh viên
                                    </th>
                                    <th>
                                      Tác vụ
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    if(isset($query1) && isset($query2)){
                                      if(count($query1) > 0 )
                                      for($i = 0; $i < count($query1); $i++){
                                        ?>
                                        <tr>
                                          <td class="py-1" width="10%">
                                            <span><?= $i+1 ?></span>
                                          </td>
                                          <td width="50%">
                                            <input type="" class="form-control" name="" style="background-color: transparent; margin: auto; display: none;" value="<?= $query1[$i]['TENLOP'] ?>">
                                            <span><?= $query1[$i]['TENLOP'] ?></span>
                                            <input type="hidden" class="form-control" name="" style="background-color: transparent; margin: auto; display: none;" value="<?= $query1[$i]['MALOP'] ?>">
                                          </td>
                                          <td width="10%">
                                            <?php
                                              if (count($query2) > 0){
                                                $test = 0;
                                                for($j = 0; $j < count($query2); $j++){
                                                  if($query2[$j]['MALOP'] == $query1[$i]['MALOP']){
                                                    $test = 1;
                                                    break;
                                                  }
                                                }
                                                if($test == 1){
                                                ?>
                                                  <span><?= $query2[$j]['SOLUONG'] ?></span>
                                                <?php
                                                }else{
                                                ?>
                                                  <span>0</span>
                                                <?php 
                                                }
                                              }else{
                                                ?>
                                                  <span>0</span>
                                                <?php
                                              }
                                            ?>
                                            
                                          </td>
                                          <td width="20%">
                                            <!--Sửa-->
                                            <button type="button" class="btn btn-icons btn-rounded btn-outline-primary btn-edit" style="display: inline-block;">
                                              <i class="mdi mdi-pencil"></i>
                                            </button>
                                            <!--Xoá-->
                                            <button type="button" class="btn btn-icons btn-rounded btn-outline-danger btn-remove" style="display: inline-block;">
                                              <i class="mdi mdi-bitbucket"></i>
                                            </button>
                                            <!--Lưu-->
                                            <button type="button" class="btn btn-icons btn-rounded btn-outline-success btn-save" style="display: none">
                                              <i class="mdi mdi-check"></i>
                                            </button>
                                          </td>
                                        </tr>
                                        <?php
                                      }
                                    }else{

                                    }
                                  ?>

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
        <input class="khoa" type="hidden" id="base" value="<?= $_SESSION['khoa'] ?>">
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

    <!-- thêm --> 
    <script src="<?= base_url() ?>Build/js/ajax/ajaxdanhmuclop.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>

  </html>