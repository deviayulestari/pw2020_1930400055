<?php

session_start();

if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

//ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
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

  <title>Daftar Mahasiswa</title>
</head>

<body>
  <div class="utama center">
    <h3 class="center">Daftar Mahasiswa</h3>
    <div class="center">
      <button class="btn waves-effect grey lighten-3"><a href="tambah.php">Tambah Data Mahasiswa</a></button>
      <button class="btn waves-effect grey lighten-2"><a href="logout.php">LOGOUT</a></button>
    </div>

    <div class="row"></div>
    <div class="row">
      <div class="col s3"></div>
      <div class="col s6  blue-grey darken-1">
        <form action="" method="POST">
          <input type="text" name="keyword" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off" class="keyword">
      </div>
      <div class="col s1">
        <button class="tombol-cari btn blue-grey darken-1" type="submit" name="cari">Cari!</button>
      </div>
      </form>
      <div class="row"></div>
    </div>

    <div class="container">
      <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>#</th>
          <th>Gambar</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>

        <?php if (empty($mahasiswa)) : ?>
          <tr>
            <td colspan="4">
              <p style="color: red; font-style: italic;">Data Mahasiswa Tidak Ditemukan!</p>
            </td>
          </tr>
        <?php endif; ?>

        <?php $i = 1;
        foreach ($mahasiswa as $m) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $m['gambar']; ?>" width="150"></td>
            <td><?= $m['nama']; ?></td>
            <td>
              <button class="btn waves-effect grey lighten-2"><a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a></button>
            </td>
          <?php endforeach; ?>
          </tr>
      </table>
    </div>
  </div>

  <script src="js/script.js"></script>

</body>

</html>