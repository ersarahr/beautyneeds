<div class="container h-100 pt-5">
	<div class="row h-100 justify-content-center align-items-center pt-3">
		<div class="col-10 col-md-8 col-lg-7">
			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body">
					<div class="text-center">
						<h1 class="h4 text-gray-900 mb-4">Daftar</h1>
					</div>

					<?= form_open_multipart('user/register');?>

					<div class="form-group row">
						<label for="email" class="col-sm-3 col-form-label">Email</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="email" name="email" placeholder="Email"
								value="<?= set_value('email'); ?>">
							<?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="username" class="col-sm-3 col-form-label">Username</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="username" name="username" placeholder="Username"
								value="<?= set_value('username'); ?>">
							<?= form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="password" class="col-sm-3 col-form-label">Password</label>
						<div class="col-sm-9">
							<div class="form-inline">
								<input type="password" class="form-control col mr-1" id="password" name="password"
									placeholder="Ketik Password">

								<input type="password" class="form-control col ml-1" id="password2" name="password2"
									placeholder="Ulangi Password">
							</div>
							<?= form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
					</div>
					<hr>
					<div class="form-group row">
						<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="nama" name="nama"
								value="<?= set_value('nama'); ?>">
							<?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenisKelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-9">
							<div class="form-check form-check-inline col-1 mt-1">
								<input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin"
									value="Pria" <?= set_value('jenisKelamin') == 'Pria' ? "checked" : ""; ?> />
								<label class="form-check-label" for="jenisKelamin">Pria</label>
							</div>
							<div class="form-check form-check-inline col-1 ml-3">
								<input class="form-check-input" type="radio" name="jenisKelamin" id="jenis_kelamin2"
									value="Wanita" <?= set_value('jenisKelamin') == 'Wanita' ? "checked" : ""; ?> />
								<label class="form-check-label" for="jenis_kelamin2">Wanita</label>
							</div>
							<?= form_error('jenisKelamin', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
								value="<?= set_value('tgl_lahir'); ?>">
							<?= form_error('tgl_lahir', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="alamat" class="col-sm-3 col-form-label">Alamat Lengkap</label>
						<div class="col-sm-9">
							<textarea class="form-control" id="alamat" name="alamat"
								rows="2"><?= set_value('alamat'); ?></textarea>
							<?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="noHp" class="col-sm-3 col-form-label">Nomor Telepon</label>
						<div class="col-sm-9">
							<input type="noHp" class="form-control" id="noHp" name="noHp"
								value="<?= set_value('noHp'); ?>">
							<?= form_error('noHp', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="foto" class="col-sm-3 col-form-label">Foto Diri</label>
						<div class="col-sm-9">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="foto" name="foto">
								<label class="custom-file-label" for="foto">Pilih Foto</label>
								<?= $this->session->flashdata('message'); //pesan error khusus upload ?>
							</div>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<button type="submit" class="btn btn-success form-control mt-2">Submit</button>
					</div>
					<!-- <hr> -->
					<div class="text-center">
						<a class="small" href="<?= base_url('auth'); ?>">Sudah memiliki akun? Silahkan <b>Login!</b></a>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<script>
	$('.custom-file-input').on('change', function () {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	});

</script>

</html>
