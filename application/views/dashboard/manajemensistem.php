<!--  sale analytics start -->
<div class="col-xl-12 col-md-12">
  <div class="card">
    <div class="card-header">
      <h5><?= $title ?></h5>
      <span class="text-muted">Welcome to Dashboard Captain</span>
      <hr>
      <table class="table">
        <thead>
          <tr>
            <th scope="row">#</th>
            <th>Role Member</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($role as $r) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td><?= $r['role_title']; ?></td>
              <td>
                <a href="<?= base_url('dashboard/kelolamenu/') ?><?= $r['id'] ?>" class="btn btn-primary">Kelola Menu</a>
                <a href="" class="btn btn-success">Ubah Menu</a>
                <a href="" class="btn btn-danger">Hapus Menu</a>
              </td>
            </tr>
            <? $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>