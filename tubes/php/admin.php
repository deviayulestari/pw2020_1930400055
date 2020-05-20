<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

//ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $pakaian = cari($_POST['keyword']);
} else {
  $pakaian = query("SELECT * FROM pakaian");
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

  <title>Admin</title>
</head>

<body class="body-admin">
  <!-- navbar -->
  <div class=" navbar-fixed">
    <nav class="brown darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">De' Paesyeon Store</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="brown-text text-lighten-4" href="../index.php">Home</a></li>
            <li><a href="tambah.php" class="btn brown lighten-1">Tambah Data</a></li>
            <li><a href="logout.php" class="btn  red accent-2 grey-text text-darken-4">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- sidenav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="../index.php">Home</a></li>
    <li><a href="tambah.php" class="btn brown lighten-1">Tambah Data</a></li>
    <li><a href="logout.php" class="btn  red accent-2 grey-text text-darken-4">Log Out</a></li>
  </ul>
  <!-- akhir navbar -->

  <div class="admin">
    <div class="row"></div>
    <div class="row"></div>
    <div class="row">
      <div class="col s2"></div>
      <div class="col s8">
        <form action="" method="POST">
          <div class="card-panel">
            <input type="text" name="keyword" size="50" autofocus placeholder="Apa yang ingin anda cari?" autocomplete="off" class="keyword">
          </div>
      </div>
      <div class="col s2">
        <button class="btn brown lighten-2" type="submit" name="cari" class="tombol-cari" style="display:none;">Cari!</button>
      </div>
      </form>
    </div>

    <div class="container-admin">
      <table class="tabel centered">
        <tr bgcolor="#8d6e63">
          <th class="center">#</th>
          <th class="center">Ubah</th>
          <th class="center">Hapus</th>
          <th class="center">Foto</th>
          <th class="center">Nama Produk</th>
          <th class="center">Brand</th>
          <th class="center">Ukuran</th>
          <th class="center">Warna</th>
          <th class="center">Stok Tersedia</th>
          <th class="center">Harga</th>
        </tr>
        <?php if (empty($pakaian)) : ?>
          <tr>
            <td colspan="5">
              <h3>Data tidak ditemukan</h3>
            </td>
          </tr>
        <?php else : ?>
          <?php $i = 1; ?>
          <?php foreach ($pakaian as $p) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td>
                <a href="ubah.php?id=<?= $p['id']; ?>" class="btn brown lighten-1">Ubah</a>
              </td>
              <td>
                <a href="hapus.php?id=<?= $p['id']; ?>" onclick="return confirm('Hapus Data??')" class=" btn brown lighten-1">Hapus</a>
              </td>
              <td><img src="../assets/img/<?= $p['foto']; ?>" width="150px"></td>
              <td><?= $p['nama_produk']; ?></td>
              <td><?= $p['brand']; ?></td>
              <td><?= $p['ukuran']; ?></td>
              <td><?= $p['warna']; ?></td>
              <td><?= $p['stok_tersedia']; ?></td>
              <td><?= $p['harga']; ?></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </table>
    </div>
  </div>

  <script src="../js/scriptAdmin.js"></script>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script>
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);
  </script>
</body>

</html>