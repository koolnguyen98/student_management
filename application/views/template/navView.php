<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="<?= base_url() ?>Build/images/faces/face1.jpg" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name"><?= $_SESSION['admin'] ?></p>
            <div>
              <small class="designation text-muted">Manager</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url()?>Welcome/viewDanhmuclop">
        <i class="menu-icon fa fa-university"></i>
        <span class="menu-title" style="font-size: 11pt">Quản lí lớp</span>
      </a>
    </li>
          <!--
          
          -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>Welcome/viewQuanlisinhvien">
              <i class="menu-icon fa fa-address-card"></i>
              <span class="menu-title" style="font-size: 11pt">Quản lí sinh viên</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>Welcome/viewQuanlidiemsinhvien">
              <i class="menu-icon fa fa-list-alt"></i>
              <span class="menu-title" style="font-size: 11pt">Quản lí điểm sinh viên</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>Welcome/viewQuanlimonhoc">
              <i class="menu-icon fa fa-archive"></i>
              <span class="menu-title" style="font-size: 11pt">Quản lí môn học</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon fa fa-print"></i>
              <span class="menu-title" style="font-size: 11pt">In</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url()?>Welcome/viewInDanhsachsinhvien" style="font-size: 11pt">Danh sách sinh viên</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url()?>Welcome/viewInBangdiemmonhoc" style="font-size: 11pt">Bảng điểm môn học</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url()?>Welcome/viewInBangdiemsinhvien" style="font-size: 11pt">Phiếu điểm sinh viên</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="<?= base_url()?>Welcome/viewInBangdiemtongket" style="font-size: 11pt">Bảng điểm tổng kết</a>
                </li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>Welcome/logout">
              <i class="menu-icon fa fa-sign-out"></i>
              <span class="menu-title" style="font-size: 11pt">Đăng xuất</span>
            </a>
          </li>
        </ul>
      </nav>