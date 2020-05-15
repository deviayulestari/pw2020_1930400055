<?php

require '../php/functions.php';
$pakaian = cari($_GET['keyword']);
?>

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