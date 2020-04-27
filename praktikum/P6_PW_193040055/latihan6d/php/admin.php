<?php
require 'functions.php';

$pakaian = query("SELECT * FROM pakaian");
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
  <link rel="stylesheet" type="text/css" href="">

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
    </table>
  </div>
</body>

</html>