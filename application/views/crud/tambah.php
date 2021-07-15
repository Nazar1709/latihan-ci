<div class="container">

	<div class="row mt-3">
		<div class="col-md-5">

			<div class="card">
				<div class="card-header">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<?php echo form_open_multipart('crud/do_upload');?>
					<form action="<?= base_url() ?>crud/tambah" method="post">
						
						<div class="form-group">
							<label for="nama" class="mb-1">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="nim" class="mb-1">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim">
							<small class="form-text text-danger"><?= form_error('nim'); ?></small>
						</div>
						<div class="form-group">
							<label for="jurusan" class="mb-1">Jurusan</label>
								<select class="form-control" name="jurusan" id="jurusan">
									<option value="Teknik Informatika">Teknik Informatika</option>
									<option value="Sistem Informasi">Sistem Informasi</option>
								</select>
						</div>
						<div class="form-group">
							<label for="email" class="mb-1">Email</label>
							<input type="email" class="form-control" id="email" name="email">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group">
							<label for="nim" class="mb-1">Gambar</label>
							<input type="file" class="form-control" id="gambar" name="file" >
							<small class="form-text text-danger"><?= form_error('file'); ?></small>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary mt-3" style="float: right;">Tambah Data</button>
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>