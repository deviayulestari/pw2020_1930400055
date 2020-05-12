<?php


session_start();

if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

require 'functions.php';

//cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data berhasil ditambahkan!');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo "Data gagal ditambahkan!";
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

  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <div class="tambah">
    <h3 class="center">Form Tambah Data Mahasiswa</h3>
    <form action="" method="POST" enctype="multipart/form-data">
      <label> Nama :</label><br>
      <input type="text" name="nama" autofocus required>
      <br>
      <br>
      <label> NRP : </label><br>
      <input type="text" name="nrp" required>
      <br>
      <br>
      <label> Email : </label><br>
      <input type="text" name="email" required>
      <br>
      <br>
      <label> Jurusan : </label><br>
      <input type="text" name="jurusan" required>
      <br>
      <br>
      <label>Gambar :
        <input type="file" name="gambar" class="gambar" onchange="previewImage()">
      </label>
      <img src="img/nophoto.jpg" width="120" style="display: block" class="img-preview">
      <br>

      <button class="btn waves-effect black" type="submit" name="tambah">Tambah Data</button>
    </form>
  </div>

  <script src="js/script.js"></script>
</body>

</html>