<?php

require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>

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