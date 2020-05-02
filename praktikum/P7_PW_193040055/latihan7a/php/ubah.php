<?php
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

<body>
  <div class="ubah">
    <h3 class="center">Form Ubah Data</h3>
    <form action="" method="post">
      <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
      <ul>
        <li>
          <label for="foto"> Foto : </label><br>
          <input type="text" name="foto" id="foto" required value="<?= $p['foto']; ?>"><br><br>
        </li>
        <li>
          <label for="nama"> Nama Produk : </label><br>
          <input type="text" name="nama" id="nama" required value="<?= $p['nama_produk']; ?>"><br><br>
        </li>
        <li>
          <label for="brand"> Brand : </label><br>
          <input type="text" name="brand" id="brand" required value="<?= $p['brand']; ?>"><br><br>
        </li>
        <li>
          <label for="ukuran"> Ukuran : </label><br>
          <input type="text" name="ukuran" id="ukuran" required value="<?= $p['ukuran']; ?>"><br><br>
        </li>
        <li>
          <label for="warna"> Warna : </label><br>
          <input type="text" name="warna" id="warna" required value="<?= $p['warna']; ?>"><br><br>
        </li>
        <li>
          <label for="stok"> Stok Tersedia : </label><br>
          <input type="text" name="stok" id="stok" required value="<?= $p['stok_tersedia']; ?>"><br><br>
        </li>
        <li>
          <label for="harga"> Harga : </label><br>
          <input type="text" name="harga" id="harga" required value="<?= $p['harga']; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="ubah" class="btn brown lighten-4" style="text-decoration: none; color: black;">Ubah Data</button>
        <button type="submit" class="btn brown lighten-3">
          <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
      </ul>
    </form>
  </div>
</body>

</html>