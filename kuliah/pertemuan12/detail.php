<?php

session_start();

if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

require 'functions.php';

//ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

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

  <title>Detail Mahasiswa</title>
</head>

<body>
  <div class="detail">
    <div class="container">
      <h2 class="header center">Detail Mahasiswa</h2>
      <div class="card horizontal">
        <div class="card-image">
          <img src="img/<?= $m['gambar']; ?>" width="250" height="350">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p> NRP : <?= $m['nrp']; ?></p>
            <p>Nama : <?= $m['nama']; ?> </p>
            <p> Email : <?= $m['email']; ?></p>
            <p> Jurusan : <?= $m['jurusan']; ?></p>
          </div>
          <div class="card-action grey darken-3">
            <p> <a href="ubah.php?id=<?= $m['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Apakah anda yakin?');">hapus</a></p>
            <p> <a href="index.php">Kembali ke daftar mahasiswa</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>