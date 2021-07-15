<div class="container">

  <div class="row mt-4">
    <div class="col-md-6">
      
      <div class="card">
        <div class="card-header">
           <b><i style="font-family: sans-serif; font-size: 15pt;">Info Data Mahasiswa</i></b>
        </div>
        <div class="card-body">
          <?php foreach ($maha->result_array() as $mhs): ?>
            
          <img src="<?= base_url(). '/gambar/'. $mhs['file']; ?>" width="190" style="float: left;">
          <div style="margin-left: 230px;">
            <h5 class="card-title"><?= $mhs['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $mhs['email']; ?></h6>
            <p class="card-text"><?= $mhs['nim']; ?></p>
            <p class="card-text"><?= $mhs['jurusan']; ?></p>
            <a href="<?= base_url(); ?>crud/mahasiswa" class="btn btn-primary">Kembali</a>
          </div>
        </div>

        <?php endforeach ?>
      </div>

    </div>
    
  </div>
</div>