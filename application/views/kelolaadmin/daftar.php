<!--  sale analytics start -->
<div class="col-xl-12 col-md-12">

  <!-- Card Header -->
  <div class="card">
    <div class="card-header">
      <h5><?= $title ?></h5>
      <span class="text-muted">Welcome to Dashboard Captain</span>
      <div class="card-header-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register" style="margin-right: 10px;">
          Launch demo modal
        </button>
      </div>
      <hr>
    </div>
  </div>
  <!-- Card Header End -->


  <!-- User Card -->
  <div class="page-body">
    <!-- round card start -->
    <div class="row users-card">
      <?php foreach ($admin as $a) : ?>
        <div class="col-lg-6 col-xl-3 col-md-6">
          <div class="card rounded-card user-card">
            <div class="card-block">
              <div class="img-hover">
                <img class="img-fluid img-radius" src="<?= base_url('assets/image/user_profile/') ?><?= $a['image'] ?>" alt="round-img">
                <div class="img-overlay img-radius">
                  <span>
                    <a href="<?= base_url('dashboard/detailadmin/') ?><?= $a['id_user'] ?>" class="btn btn-sm btn-primary" data-popup="lightbox"><i class="icofont icofont-user"></i>&nbsp;&nbsp;Admin Profile</a>
                  </span>
                </div>
              </div>
              <div class="user-content">
                <h4 class=""><?= $a['username'] ?></h4>
                <?php
                $role_id = $a['role_id'];
                $queryMenu = "SELECT user_role.id, role_title
                            FROM user_role JOIN user
                            ON user_role.id = user.role_id
                            WHERE user.role_id = $role_id
                            ORDER BY user_role.id ASC
                            ";
                $menu = $this->db->query($queryMenu)->row_array();
                // echo '<pre>';
                // print_r($menu);
                ?>
                <p class="m-b-0 text-muted"><?= $menu['role_title'] ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- User Card End -->

</div>

<!-- Register modal start -->
<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="login-card card-block login-card-modal">
      <form class="md-float-material" action="<?= base_url('auth/tambahadmin') ?>" method="POST">
        <div class="text-center">
          <img src="<?= base_url('assets/dashboard/') ?>images/auth/logo.png" alt="logo.png">
        </div>
        <div class="card m-t-15">
          <div class="auth-box card-block">
            <div class="row m-b-20">
              <div class="col-md-12">
                <h3 class="text-center txt-primary">Sign up. It is fast and easy.</h3>
              </div>
            </div>
            <hr>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Choose Username" id="username" name="username" value="<?= set_value('username'); ?>">
              <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
              <span class="md-line"></span>
            </div>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Your Email Address" id="email" name="email" value="<?= set_value('email'); ?>">
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              <span class="md-line"></span>
            </div>
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Choose Password" id="password1" name="password1">
              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
              <span class="md-line"></span>
            </div>
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Confirm Password" id="password2" name="password2">
              <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
              <span class="md-line"></span>
            </div>
            <div class="row m-t-15">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center">Sign up now</button>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-10">
                <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                <p class="text-inverse text-left"><b>Your Authentication Team</b></p>
              </div>
              <div class="col-md-2">
                <img src="<?= base_url('assets/dashboard/') ?>images/auth/Logo-small-bottom.png" alt="small-logo.png">
              </div>
            </div>
          </div>
        </div>
      </form>
      <!-- end of form -->
    </div>
  </div>
</div>
<!-- Register modal end-->