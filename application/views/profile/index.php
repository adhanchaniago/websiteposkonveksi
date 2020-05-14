<div class="col-lg-12">
  <div class="cover-profile">
    <div class="profile-bg-img">
      <img class="profile-bg-img img-fluid" src="<?= base_url('assets/dashboard/') ?>images/user-profile/bg-img1.jpg" alt="bg-img">
      <div class="card-block user-info">
        <div class="col-md-12">
          <div class="media-left">
            <a href="#" class="profile-image">
              <img class="user-img img-radius" src="<?= base_url('assets/image/user_profile/') ?><?= $admin['image'] ?>" style="width: 100px;" alt="user-img">
            </a>
          </div>
          <div class="media-body row">
            <div class="col-lg-12">
              <div class="user-title">
                <h2><?= $admin['username'] ?></h2>
                <?php
                $role_id = $admin['role_id'];
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
                <span class="text-white"><?= $menu['role_title'] ?></span>
              </div>
            </div>
          </div>
          <div>
            <div class="pull-right cover-btn">
              <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>


</div>
<!--profile cover end-->
<div class="row">

  <div class="col-lg-12">
    <!-- tab header start -->
    <!-- tab header end -->
    <!-- tab content start -->
    <div class="tab-content">
      <!-- tab panel personal start -->
      <div class="tab-pane active" id="personal" role="tabpanel">
        <!-- personal card start -->
        <div class="card">
          <div class="card-header">
            <h5 class="card-header-text">About Me</h5>
            <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
              <i class="icofont icofont-edit"></i>
            </button>
          </div>
          <div class="card-block">
            <div class="view-info">
              <div class="row">
                <div class="col-lg-12">
                  <div class="general-info">
                    <div class="row">
                      <div class="col-lg-12 col-xl-6">
                        <div class="table-responsive">
                          <table class="table m-0">
                            <tbody>
                              <tr>
                                <th scope="row">Username</th>
                                <td><?= $admin['username']; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Tanggal Bergabung</th>
                                <td><?= date('d F Y', strtotime($admin['date_created'])); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Alamat</th>
                                <td><?= $admin['alamat'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Lokasi</th>
                                <td><?= $admin['kota'] ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- end of table col-lg-6 -->
                      <div class="col-lg-12 col-xl-6">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <th scope="row">Email</th>
                                <td><?= $admin['email'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Nomor Telephone</th>
                                <td><?= $admin['telp'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Whatsapp</th>
                                <td><?= $admin['telp'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Website</th>
                                <td><a href="<?= base_url() ?>"><?= base_url() ?></a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- end of table col-lg-6 -->
                    </div>
                    <!-- end of row -->
                  </div>
                  <!-- end of general info -->
                </div>
                <!-- end of col-lg-12 -->
              </div>
              <!-- end of row -->
            </div>
            <!-- end of view-info -->
            <div class="edit-info">
              <div class="row">
                <div class="col-lg-12">
                  <form action="<?= base_url('profile/ubahprofile'); ?>" method="POST">
                    <div class="general-info">
                      <div class="row">
                        <div class="col-lg-6">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                    <input type="text" class="form-control" value="<?= $admin['username'] ?>" id="username" name="username">
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                    <input type="text" class="form-control" value="<?= $admin['alamat'] ?>" id="alamat" name="alamat">
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                    <input type="text" class="form-control" value="<?= $admin['kota'] ?>" id="kota" name="kota">
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- end of table col-lg-6 -->
                        <div class="col-lg-6">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-mail"></i></span>
                                    <input type="text" class="form-control" value="<?= $admin['email'] ?>" id="email" name="email" readonly>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                    <input type="text" class="form-control" value="<?= $admin['telp'] ?>" id="telp" name="telp">
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- end of table col-lg-6 -->
                      </div>
                      <!-- end of row -->
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20">Save</button>
                        <a href="<?= base_url('profile') ?>" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                      </div>
                    </div>
                  </form>
                  <!-- end of edit info -->
                </div>
                <!-- end of col-lg-12 -->
              </div>
              <!-- end of row -->
            </div>
            <!-- end of edit-info -->
          </div>
          <!-- end of card-block -->
        </div>
        <!-- personal card end-->
      </div>

    </div>
    <!-- tab content end -->
  </div>