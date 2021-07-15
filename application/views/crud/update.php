<div class="container">

	<div class="row mt-3">
		<div class="col-md-5">

			<div class="card">
				<div class="card-header">
					<h4><b>Form Edit Mahasiswa</b></h4>
				</div>
				<div class="card-body">
					<?php echo form_open_multipart('crud/do_upload');?>
					<?php foreach ($maha->result() as $mhs): ?>
					<form action="<?= base_url(); ?>crud/aksi_update/<?php echo $mhs->id ?>" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mhs->nama ?>">
						</div>
						<div class="form-group mt-1">
							<label for="nim" class="mb-1">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim" value="<?php echo $mhs->nim ?>">
						</div>
						<div class="form-group">
							<label for="jurusan" class="mb-1">Jurusan</label>
								<select class="form-control" name="jurusan" id="jurusan" name="jurusan" value="<?php echo $mhs->jurusan ?>">
									<option value="Teknik Informatika">Teknik Informatika</option>
									<option value="Sistem Informasi">Sistem Informasi</option>
								</select>
						</div>
						<div class="form-group mt-1">
							<label for="email" class="mb-1">Email</label>
							<input type="email" class="form-control" id="email" name="email" value="<?php echo $mhs->email ?>">
						</div>
						<div class="form-group mt-1">
							<label for="Gambar" class="mb-1">Gambar</label>
							<input type="file" class="form-control" id="file" name="file" value="<?php echo $mhs->file ?>">
						</div>
						<button type="submit" name="tambah" class="btn btn-primary mt-3" style="float: right;">Simpan</button>
					</form>
					<?php endforeach ?>
				</div>				
			</div>
		</div>
	</div>
</div>