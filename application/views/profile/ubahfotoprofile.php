<!--  sale analytics start -->
<div class="col-xl-12 col-md-12">
	<div class="card">
		<div class="card-header">
			<h5><?= $title ?></h5>
			<span class="text-muted">Welcome to Dashboard Captain</span>
			<hr>
			<?= form_open_multipart('profile/editfoto'); ?>
			<div class="form-group row">
				<div class="col-sm-2">Picture</div>
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-3">
							<img src="<?= base_url('assets/image/user_profile/') . $user['image']; ?>" class="img-thumbnail">
						</div>
						<div class="col-sm-9">
							<div class="custom-file">
								<input type="file" class="form-control" id="image" name="image">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group row justify-content-end">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Edit</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>