<?php 
  require '../query.php';

  $daftar_barang = query("SELECT * FROM tblBarang");

  // var_dump($barang);
  // die;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Halaman Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="navbar-container">
        <a class="navbar-brand" href="#">Halo admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="tambah_barang.php">Tambah Barang</a>
            <!-- <a class="nav-item nav-link" href="#">Pricing</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
          </div>
        </div>
      </div>
    </nav>
    <section class="content-wrapper">
      <div class="card-wrapper">
        <div class="cards">
          <?php foreach ($daftar_barang as $barang): ?>
          <div class="card" style="width: 18rem;">
            <div class="img-wrapper">
              <img class="card-img-top" src="../image/iphone.jpg" alt="Card image cap">
            </div>
            <div class="card-body">
              <h5 class="title"><?= $barang['nama_barang'] ?></h5>
              <p class="color"><?= $barang['warna_barang'] ?></p>
              <p class="price">Rp.<?= $barang['harga_barang'] ?>,00-</p>
              <p class="stok">Stok: <?= $barang['stok_barang'] ?></p>
              <div class="btn-wrapper">
                <a href="#" class="btn btn-primary btn-tambah">Tambah Stock</a>
                <a href="#" class="btn btn-warning btn-edit">Edit</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <!-- <div class="card" style="width: 18rem;">
            <div class="img-wrapper">
              <img class="card-img-top" src="./image/iphone.jpg" alt="Card image cap">
            </div>
            <div class="card-body">
              <h5 class="title">Iphone 13</h5>
              <p class="color">Red</p>
              <p class="price">Rp.12000000,00-</p>
              <p class="stok">Stok: 15</p>
              <div class="btn-wrapper">
                <a href="#" class="btn btn-primary btn-tambah">Tambah Stock</a>
                <a href="#" class="btn btn-warning btn-edit">Edit</a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>