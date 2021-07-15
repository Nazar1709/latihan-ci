
<div class="container">  

	<div class="row">
		<div class="col-md-6 mt-3">
          <a href="<?= base_url(); ?>crud/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
	  </div>
	</div>
</div>

<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <form action="<?= base_url(); ?>crud/mahasiswa" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Mahasiswa" name="keyword" id="keyword">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Search</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  
	<div class="row mt-3">
			<h3>Daftar Nama Mahasiswa</h3>
        <?php if ($this->session->flashdata('flash') ): ?>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div> 
     </div>
  <?php endif ?>

  <?php if ($this->session->flashdata('hapus') ): ?>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('hapus'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div> 
     </div>
  <?php endif ?>

  <?php if ($this->session->flashdata('ubah') ): ?>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('ubah'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div> 
     </div>
  <?php endif ?>

  <div class="comtainer">
    <div class="alert alert-info">Ditemukan data dalam jumlah <strong><?php echo $num_rows ?></strong></div>
			<table class="table table-bordered">
        <tr>
          <th style="text-align: center;">Nama</th>
          <th style="text-align: center;">Nim</th>
          <th style="text-align: center;">Jurusan</th>
          <th style="text-align: center;">Email</th>
          <th style="text-align: center;">Gambar</th>
          <th style="text-align: center; width: 15.5%;">Aksi</th>
        </tr>

        <?php foreach ($maha as $mhs): ?>
        <tr>
          <td><?= $mhs['nama']; ?></td>
          <td style="text-align: center;"><?= $mhs['nim']; ?></td>
          <td><?= $mhs['jurusan']; ?></td>
          <td><?= $mhs['email']; ?></td>
          <td align="center"><img src="<?= base_url(). '/gambar/'. $mhs['file']; ?>" width="50" height="50" ></td>
          <td>
              <a href="<?= base_url(); ?>crud/delete/<?php echo $mhs['id']; ?>" class="btn btn-danger"  style="float:right;" onclick="return confirm('Data yakin Dihapus ?')"><i class="fa fa-trash"></i></a>
              <a href="<?= base_url(); ?>crud/update/<?php echo $mhs['id']; ?>" class="btn btn-success" style="float: right; margin-right: 7px;"><i class="fa fa-edit"></i></a>
              <a href="<?= base_url(); ?>crud/read/<?php echo $mhs['id']; ?>" class="btn btn-warning" style="float: right; margin-right: 7px;"><i class="fa fa-eye"></i></a>
          </td>
        </tr>
        <?php endforeach ?>
        
      </table>
      </div>
		</div>
	</div>
</div>