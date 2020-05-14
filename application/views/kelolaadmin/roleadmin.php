<!--  sale analytics start -->
<div class="col-xl-12 col-md-12">
  <div class="card">
    <div class="card-header">
      <h5><?= $title ?></h5>
      <span class="text-muted">Welcome to Dashboard Captain</span>
      <hr>
      <div class="table-responsive">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td scope="row">Nama Admin</td>
              <td>: <?= $admin['username']; ?></td>
            </tr>
            <tr>
              <td scope="row">Alamat Admin</td>
              <td>: <?= $admin['alamat']; ?></td>
            </tr>
            <tr>
              <td scope="row">Telp Admin</td>
              <td>: <?= $admin['telp']; ?></td>
            </tr>
            <tr>
              <td scope="row">Image Admin</td>
              <td>: <img src="<?= base_url('assets/image/user_profile/') ?><?= $admin['image']; ?>" alt="" style="width: 100px;"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row justify-content-center" style="margin-top: 50px;">
        <div class="col-10">
          <form action="<?= base_url('kelolaadmin/ubahrole/') ?><?= $admin['id_user'] ?>" method="POST">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Role Title</label>
              <div class="col-sm-10">
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
                <input type="text" class="form-control form-control-round" id="currentpassword" name="currentpassword" value="<?= $menu['role_title'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Role Title Baru</label>
              <div class="col-sm-10">
                <select class="form-control form-control-round" id="role_title" name="role_title">
                  <?php foreach ($role as $r) : ?>
                    <option><?= $r['role_title']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2"></div>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ubah Role Title</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>