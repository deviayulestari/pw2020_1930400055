<?php

session_start();

if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

require 'functions.php';

//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

//ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

//cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data berhasil diubah!');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo "Data gagal diubah!";
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
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">

  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <div class="tambah">
    <h3 class="center">Form Ubah Data Mahasiswa</h3>
    <form action="" method="POST">
      <input type="hidden" name="id" value="<?= $m['id']; ?>">
      <label> Nama :</label><br>
      <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
      <br>
      <br>
      <label> NRP : </label><br>
      <input type="text" name="nrp" required value="<?= $m['nrp']; ?>">
      <br>
      <br>
      <label> Email : </label><br>
      <input type="text" name="email" required value="<?= $m['email']; ?>">
      <br>
      <br>
      <label> Jurusan : </label><br>
      <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
      <br>
      <br>
      <label>Gambar :</label><br>
      <input type="text" name="gambar" required value="<?= $m['gambar']; ?>">
      <br>
      <br>
      <button class="btn waves-effect black" type="submit" name="ubah">Ubah Data</button>
    </form>
  </div>
</body>

</html>