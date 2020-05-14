<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $pakaian = query("SELECT * FROM pakaian WHERE
              foto LIKE '%$keyword%' OR
              nama_produk LIKE '%$keyword%' OR
              brand LIKE '%$keyword%' OR
              ukuran LIKE '%$keyword%' OR
              warna LIKE '%$keyword%' OR
              stok_tersedia LIKE '%$keyword%' OR
              harga LIKE '%$keyword%' 
              ");
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
  <style>
    .add {
      padding: 25px 200px 25px;

    }

    .tabel {
      width: 1250px;
      margin: 10px auto;
    }
  </style>
  </style>
</head>

<body bgcolor="lavender">
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="brown darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">De' Paesyeon Store</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="logout.php" class="btn  red accent-2 grey-text text-darken-4">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- akhir navbar -->

  <div class="row"></div>
  <div class="row"></div>
  <div class="row">
    <div class="col s3"></div>
    <div class="col s5 brown lighten-2">
      <form action="" method="GET">
        <input type="text" name="keyword" size="50" autofocus placeholder="Apa yang ingin anda cari?" autocomplete="off">
    </div>
    <div class="col s2">
      <button class="btn brown lighten-2" type="submit" name="cari">Cari!</button>
    </div>
    </form>
  </div>
  <div class="add">
    <button class="btn brown lighten-4"><a href="tambah.php">Tambah Data</a></button>
  </div>
  <div class="admin">
    <table class="tabel">
      <tr bgcolor="#d7ccc8">
        <th>#</th>
        <th>Ubah</th>
        <th>Hapus</th>
        <th>Foto</th>
        <th>Nama Produk</th>
        <th>Brand</th>
        <th>Ukuran</th>
        <th>Warna</th>
        <th>Stok Tersedia</th>
        <th>Harga</th>
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
              <button class="btn brown lighten-4"> <a href="../php/ubah.php?id=<?= $p['id']; ?>">Ubah</button></a>
            </td>
            <td>
              <button class="btn brown lighten-4"><a href="../php/hapus.php?id=<?= $p['id']; ?>" onclick="return confirm('Hapus Data??')">Hapus</button></a>
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
</body>

</html>