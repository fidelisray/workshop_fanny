<?php
  require '../koneksi.php';

  function tambahdatabarang($data) {
    global $conn;

    // $foto_barang = uploadgambar();
    // if( !$foto_barang ) {
    //   echo "<script>
    //           alert('Gambar gagal diupload');
    //         </scritp>";
    //   return false;
    // }
    
    $id_barang = uniqid();
    $nama_barang = $data["nama_barang"];
    $stok_barang = $data["stok_barang"];
    $warna_barang = $data["warna_barang"];
    $harga_barang = $data["harga_barang"];

    $query = "INSERT INTO tblBarang(id_barang,nama_barang,stok_barang,warna_barang,harga_barang) VALUES
              ('$id_barang','$nama_barang','$stok_barang','$warna_barang','$harga_barang')
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
  }

  if( isset($_POST['submit'])) {
    if( tambahdatabarang($_POST) > 0 ) {
      echo "
        <script>
          alert('Data barang berhasil ditambahkan..');
          document.location.href = 'index.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('Data barang gagal ditambahkan!!');
          document.location.href = 'index.php';
        </script>
      ";
    }
    // var_dump($_POST);
    // die;
  }
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

    <title>Tambah Barang</title>
  </head>
  <body>
    <section class="content-wrapper tambah-barang">
      <div class="form-wrapper">
        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Barang :</label>
            <input type="text" class="form-control" placeholder="Nama Smartphone" name="nama_barang">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Warna Barang :</label>
            <input type="text" class="form-control" placeholder="Warna" name="warna_barang">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jumlah Barang :</label>
            <input type="number" class="form-control" placeholder="Jumlah" name="stok_barang">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Harga Barang :</label>
            <input type="number" class="form-control" placeholder="Harga Smartphone" name="harga_barang">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>