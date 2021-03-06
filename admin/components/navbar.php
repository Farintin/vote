<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="\">
        <img src="https://i.imgur.com/FcIx9F7.png" class="navbar-brand-img" alt="Voteonline Logo">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">

        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="https://i.imgur.com/n1d2JNC.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="#" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="#" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="#" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="#" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="?logout=true" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="\">
                <img src="https://i.imgur.com/FcIx9F7.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <!--
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        -->
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item dashboard ">
            <a class="nav-link" href="index">
              <i class="ni ni-align-left-2 text-blue"></i> Dashboard
            </a>
          </li>
          <li class="nav-item contestants">
            <a class="nav-link" href="contestants">
              <i class="ni ni-single-02 text-blue"></i> Contestants
            </a>
          </li>
          <li class="nav-item dropdown voters">
            <a class="nav-link dropdown-toggle" href="" id="paymentsDropdown" role="button" data-toggle="dropdown">
              <i class="ni ni-box-2 text-blue"></i> Voters
            </a>
            <div class="dropdown-menu" aria-labelledby="voteDropdown">
              <a class="dropdown-item" href="online-voters">Online Voters</a>
              <a class="dropdown-item" href="offline-voters">Offline Voters</a>
            </div>
          </li>
            <li class="nav-item gateway">
                <a class="nav-link" href="payment-gateway">
                    <i class="ni ni-lock-circle-open text-blue"></i> Payment Gateway
                </a>
            </li>
            <li class="nav-item verify">
                <a class="nav-link" href="verify-payment">
                    <i class="ni ni-money-coins text-blue"></i> Verify payment
                </a>
            </li>
            <li class="nav-item client">
                <a class="nav-link" href="bank-details">
                    <i class="ni ni-user-run text-blue"></i> Client Account
                </a>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="settingsDropdown" role="button" data-toggle="dropdown">
              <i class="ni ni-settings text-blue"></i> Settings
            </a>
            <div class="dropdown-menu" aria-labelledby="settingsDropdown">
              <a class="dropdown-item" href="admin">Admin</a>
              <a class="dropdown-item" href="view-contestants">View admin</a>
              <a class="dropdown-item" href="theme">Theme</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="trash">
              <i class="ni ni-archive-2 text-blue"></i> Trash
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="ni ni-button-power text-blue"></i> Voting status
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Documentation</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-spaceship"></i> Getting started
            </a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="https://voteonline.com.ng/help" target="_blank">
              <i class="ni ni-headphones text-dark"></i> Contact Support
            </a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="?logout=true" target="_blank">
                    <i class="ni ni-watch-time text-dark"></i> Logout
                </a>
            </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Left Navbar -->
  <div class="main-content">
  <!-- Left Top Navbar -->


<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Dashboard</a>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="https://i.imgur.com/09BChWb.png">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['username']?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="#" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="?logout=true" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->