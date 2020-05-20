<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$p = query("SELECT * FROM pakaian WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo " <script>
              alert('Data Berhasil diubah!');
              document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script>
    alert('Data Gagal Diubah!');
    document.location.href = 'admin.php';
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css?family=Shrikhand|Lobster|Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">

  <title>Ubah Data</title>
</head>

<body class="body-ubah">
  <div class="ubah">
    <div class="row">
      <div class="col m2 s2"></div>
      <div class="col m8 s8">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="card-panel">
            <h3 class="center">Form Ubah Data</h3>
            <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
            <div class="input-field">
              <i class="material-icons prefix">camera_alt</i>
              <input type="hidden" name="foto_lama" value="<?= $p['foto']; ?>">
              <label for="foto"> Foto : </label><br><br>
              <input type="file" name="foto" id="foto" class="foto" onchange="previewImage()">
              <img src="../assets/img/<?= $p['foto']; ?>" width="120" style="display: block" class="img-preview">
            </div>
            <div class="input-field">
              <i class="material-icons prefix">filter_frames</i>
              <label for="nama"> Nama Produk : </label><br>
              <input type="text" name="nama" id="nama" required value="<?= $p['nama_produk']; ?>">
            </div>
            <div class="input-field">
              <i class="material-icons prefix">loyalty</i>
              <label for="brand"> Brand : </label><br>
              <input type="text" name="brand" id="brand" required value="<?= $p['brand']; ?>">
            </div>
            <div class="input-field">
              <i class="material-icons prefix">local_offer</i>
              <label for="ukuran"> Ukuran : </label><br>
              <input type="text" name="ukuran" id="ukuran" required value="<?= $p['ukuran']; ?>">
            </div>
            <div class="input-field">
              <i class="material-icons prefix">color_lens</i>
              <label for="warna"> Warna : </label><br>
              <input type="text" name="warna" id="warna" required value="<?= $p['warna']; ?>">
            </div>
            <div class="input-field">
              <i class="material-icons prefix">storage</i>
              <label for="stok"> Stok Tersedia : </label><br>
              <input type="text" name="stok" id="stok" required value="<?= $p['stok_tersedia']; ?>">
            </div>
            <div class="input-field">
              <i class="material-icons prefix">monetization_on</i>
              <label for="harga"> Harga : </label><br>
              <input type="text" name="harga" id="harga" required value="<?= $p['harga']; ?>">
            </div>
            <div class="row">
              <div class="col m8 s8"></div>
              <button type="submit" name="ubah" class="btn brown lighten-4" style="text-decoration: none; color: black;">Ubah Data</button>
              <button type="submit" class="btn brown lighten-3">
                <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
              </button>
              <div class="col m2 s2"></div>
            </div>
          </div>
        </form>
      </div>
      <div class="col m2 s2"></div>
    </div>
  </div>
  <script src="../js/script.js"></script>
</body>

</html>