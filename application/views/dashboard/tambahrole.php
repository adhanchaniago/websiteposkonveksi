<!--  sale analytics start -->
<div class="col-xl-12 col-md-12">
  <div class="card">
    <div class="card-header">
      <h5>Sales Analytics</h5>
      <span class="text-muted">Welcome to Dashboard Captain</span>
      <hr>

      <form action="<?= base_url('dashboard/tambahrole'); ?>" method="POST">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Role</label>
          <div class="col-sm-10">
            <input type="text" class="form-control form-control-round" id="role" name="role">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Tambah Role Karyawan</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>