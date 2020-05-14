<!--  sale analytics start -->
<div class="col-xl-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h5><?= $title ?></h5>
            <span class="text-muted">Welcome to Dashboard Captain</span>
            <hr>

            <form action="<?= base_url('profile/ubahpassword'); ?>" method="POST">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password Lama</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control form-control-round" id="currentpassword" name="currentpassword">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control form-control-round" id="newpassword1" name="newpassword1">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ulangi Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control form-control-round" id="newpassword2" name="newpassword2">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ganti Password</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>