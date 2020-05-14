<!--  sale analytics start -->
<div class="col-xl-12 col-md-12">
  <div class="card">
    <div class="card-header">
      <h5>Sales Analytics</h5>
      <span class="text-muted">Welcome to Dashboard Captain</span>
      <hr>
      <table class="table">
        <thead>
          <tr>
            <th scope="row">#</th>
            <th>Username Admin</th>
            <th>Role admin</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($admin as $a) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td><?= $a['username']; ?></td>
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
              <td><?= $menu['role_title'] ?></td>
              <td>
                <?php if ($a['is_active'] == 1) : ?>
                  <a href="<?= base_url('kelolaadmin/matikanakun/') ?><?= $a['id_user'] ?>" class="btn btn-primary">Nonaktifkan akun</a>
                <?php else : ?>
                  <a href="<?= base_url('kelolaadmin/aktifkanakun/') ?><?= $a['id_user'] ?>" class="btn btn-primary">aktifkan akun</a>
                <?php endif; ?>
                <a href="<?= base_url('kelolaadmin/roleadmin/') ?><?= $a['id_user'] ?>" class="btn btn-success">Ubah Role Admin</a>
                <a href="<?= base_url('kelolaadmin/hapusadmin/') ?><?= $a['id_user'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete <?= $a['username'] ?> data?')">Hapus Admin</a>
              </td>
            </tr>
            <? $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>