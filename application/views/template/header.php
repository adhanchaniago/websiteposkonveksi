<!DOCTYPE html>
<html lang="en">

<head>
  <title>TAJI! - <?= $title ?> </title>
  <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="#">
  <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
  <meta name="author" content="#">
  <!-- Favicon icon -->
  <link rel="icon" href="<?= base_url('assets/dashboard/') ?>images/favicon.ico" type="image/x-icon">

  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
  <!-- Required Fremwork -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/dashboard/') ?>bower_components/bootstrap/css/bootstrap.min.css">
  <!-- themify-icons line icon -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/dashboard/') ?>icon/themify-icons/themify-icons.css">
  <!-- Date-range picker css  -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/dashboard/') ?>bower_components/bootstrap-daterangepicker/css/daterangepicker.css">
  <!-- Date-Dropper css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/dashboard/') ?>bower_components/datedropper/css/datedropper.min.css">
  <!-- Data Table Css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/dashboard/') ?>bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <!-- ico font -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/dashboard/') ?>icon/icofont/css/icofont.css">
  <!-- feather Awesome -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/dashboard/') ?>icon/feather/css/feather.css">
  <!-- Style.css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/dashboard/') ?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/dashboard/') ?>css/jquery.mCustomScrollbar.css">
</head>

<body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
    <div class="ball-scale">
      <div class='contain'>
        <div class="ring">
          <div class="frame"></div>
        </div>
        <div class="ring">
          <div class="frame"></div>
        </div>
        <div class="ring">
          <div class="frame"></div>
        </div>
        <div class="ring">
          <div class="frame"></div>
        </div>
        <div class="ring">
          <div class="frame"></div>
        </div>
        <div class="ring">
          <div class="frame"></div>
        </div>
        <div class="ring">
          <div class="frame"></div>
        </div>
        <div class="ring">
          <div class="frame"></div>
        </div>
        <div class="ring">
          <div class="frame"></div>
        </div>
        <div class="ring">
          <div class="frame"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

      <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">

          <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
              <i class="feather icon-menu"></i>
            </a>
            <a href="index-1.htm">
              <img class="img-fluid" src="<?= base_url('assets/dashboard/') ?>images/logo.png" alt="Theme-Logo">
            </a>
            <a class="mobile-options">
              <i class="feather icon-more-horizontal"></i>
            </a>
          </div>

          <div class="navbar-container container-fluid">
            <ul class="nav-left">
              <li class="header-search">
                <div class="main-search morphsearch-search">
                  <div class="input-group">
                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                  </div>
                </div>
              </li>
              <li>
                <a href="#!" onclick="javascript:toggleFullScreen()">
                  <i class="feather icon-maximize full-screen"></i>
                </a>
              </li>
            </ul>
            <ul class="nav-right">
              <li class="header-notification">
                <div class="dropdown-primary dropdown">
                  <div class="dropdown-toggle" data-toggle="dropdown">
                    <i class="feather icon-bell"></i>
                    <span class="badge bg-c-pink">?</span>
                  </div>
                  <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li>
                      <h6>Notifications</h6>
                      <label class="label label-danger">New</label>
                    </li>
                    <li>
                      <h6 style="text-align: center;">Maaf Fitur Belum tersedia</h6>
                    </li>
                    <!-- <li>
                      <div class="media">
                        <img class="d-flex align-self-center img-radius" src="images/avatar-4.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <h5 class="notification-user">John Doe</h5>
                          <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                          <span class="notification-time">30 minutes ago</span>
                        </div>
                      </div>
                    </li> -->
                  </ul>
                </div>
              </li>

              <li class="user-profile header-notification">
                <div class="dropdown-primary dropdown">
                  <div class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?= base_url('assets/image/user_profile/') ?><?= $user['image'] ?>" class="img-radius" alt="User-Profile-Image">
                    <span><?= $user['username'] ?></span>
                    <i class="feather icon-chevron-down"></i>
                  </div>
                  <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li>
                      <a href="<?= base_url('profile'); ?>">
                        <i class="feather icon-user"></i> Profile
                      </a>
                    </li>
                    <li>
                      <a href="<?= base_url('auth/logout'); ?>">
                        <i class="feather icon-log-out"></i> Logout
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
          <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar main-menu">
              <div class="pcoded-navigatio-lavel">Navigation</div>
              <ul class="pcoded-item pcoded-left-item">
                <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT user_menu.id, menu, icon
                            FROM user_menu JOIN user_access_menu
                            ON user_menu.id = user_access_menu.menu_id
                            WHERE user_access_menu.role_id = $role_id
                            ORDER BY user_access_menu.menu_id ASC
                            ";
                $menu = $this->db->query($queryMenu)->result_array();
                ?>
                <!-- looping menu -->
                <?php foreach ($menu as $m) : ?>
                  <?php if ($title_header == $m['menu']) : ?>
                    <li class="pcoded-hasmenu active pcoded-trigger">
                    <?php else : ?>
                    <li class="pcoded-hasmenu">
                    <?php endif; ?>
                    <a href="javascript:void(0)">
                      <span class="pcoded-micon"><i class="<?= $m['icon']; ?>"></i></span>
                      <span class="pcoded-mtext"><?= $m['menu']; ?> </span>
                    </a>
                    <ul class="pcoded-submenu">
                      <?php
                      $menuId = $m['id'];
                      $querySubMenu = " SELECT * FROM user_sub_menu
                                  WHERE menu_id = $menuId
                                  AND is_active = 1
                                  ";
                      $subMenu = $this->db->query($querySubMenu)->result_array();
                      ?>

                      <!-- looping sub menu -->
                      <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                          <li class="active">
                          <?php else : ?>
                          <li>
                          <?php endif; ?>
                          <a href="<?= base_url($sm['url']); ?>">
                            <span class="pcoded-mtext"><?= $sm['title']; ?></span>
                          </a>
                          </li>
                        <?php endforeach; ?>
                    </ul>
                    </li>
                  <?php endforeach; ?>
              </ul>
            </div>
          </nav>
          <div class="pcoded-content">
            <div class="pcoded-inner-content">
              <div class="main-body">
                <div class="page-wrapper">

                  <div class="page-body">
                    <div class="row">
                      <!-- task, page, download counter  start -->
                      <?= $this->session->flashdata('message'); ?>