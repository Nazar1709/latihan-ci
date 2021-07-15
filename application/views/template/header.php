<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/44434ae3f0.js" crossorigin="anonymous"></script>

    <title><?php echo $judul; ?></title>
  </head>
  <body style="background-color: whitesmoke;">
    
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container">
    <a style="color: white;" class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <link rel="stylesheet" href="https:/maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a style="color: white;" class="nav-link" href="<?= base_url();  ?>">Dashboard</a>
        <a style="color: white;" class="nav-link" href="<?= base_url(); ?>crud/mahasiswa">Mahasiswa</a>
        <a style="color: white;" class="nav-link" href="<?= base_url(); ?>crud/about">About</a>
    </div>
  </div>
  </div>
</nav>