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
            <th>Akses</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($menu as $m) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $m['menu']; ?></td>
              <td>
                <div class="border-checkbox-group border-checkbox-group-success">
                  <input class="border-checkbox" type="checkbox" id="checkbox2" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                </div>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>