<ul class="navbar-nav navbar-nav-right">

  <li class="nav-item dropdown d-none d-xl-inline-block">
    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
      <span class="profile-text">Hello, <?= $_SESSION['admin'] ?> !</span>
      <img class="img-xs rounded-circle" src="<?= base_url() ?>Build/images/faces/face1.jpg" alt="Profile image">
    </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
      <a class="dropdown-item p-0">
        <div class="d-flex border-bottom">
          <div class="py-3 px-4 d-flex align-items-center justify-content-center">
            <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
          </div>
          <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
            <i class="mdi mdi-account-outline mr-0 text-gray"></i>
          </div>
          <div class="py-3 px-4 d-flex align-items-center justify-content-center">
            <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
          </div>
        </div>
      </a>
      <a class="dropdown-item mt-2">
        Manage Accounts
      </a>
      <a class="dropdown-item">
        Change Password
      </a>
      <a class="dropdown-item">
        Check Inbox
      </a>
      <a class="dropdown-item" href="<?= base_url()?>Welcome/logout">
        Sign Out
      </a>
    </div>
  </li>
</ul>
<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
  <span class="mdi mdi-menu"></span>
</button>