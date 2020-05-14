<?php

require '../php/functions.php';
$pakaian = cari($_GET['keyword']);
?>

<div class="container-product">
  <?php if (empty($pakaian)) : ?>
    <tr>
      <td colspan="5">
        <h3>Data tidak ditemukan</h3>
      </td>
    </tr>
  <?php else : ?>
    <?php foreach ($pakaian as $row) : ?>
      <p class="nama">
        <li class="collection-item"><a href="php/detail.php?id=<?= $row['id'] ?>">
            <?= $row["nama_produk"] ?>
          </a></li>
      </p>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>