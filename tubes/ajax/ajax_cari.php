<?php

require '../php/functions.php';
$pakaian = cari($_GET['keyword']);
?>

<div class="container-product">
  <div class="row">
    <ul class="collection with-header">

      <?php if (empty($pakaian)) : ?>
        <tr>
          <td colspan="5">
            <h3>Data tidak ditemukan</h3>
          </td>
        </tr>
      <?php else : ?>
        <li class="collection-header">
          <h2 class="judul brown-text text-darken-4">Klik to view more info!</h2>
        </li>
        <?php foreach ($pakaian as $row) : ?>
          <p class="nama">
            <li class="collection-item"><a href="php/detail.php?id=<?= $row['id'] ?>" class="nama brown-text text-darken-4">
                <?= $row["nama_produk"] ?>
              </a></li>
          </p>
        <?php endforeach; ?>
    </ul>

    <!-- catalogue version -->
    <h4 class="center light grey-text text-darken-3">Catalogue Version</h4>
    <?php foreach ($pakaian as $row) : ?>
      <div class="row">
        <div class="col m4 s12">
          <div class="card brown darken-4">

            <div class="card-image waves-effect waves-block waves-light">
              <img src="assets/img/<?= $row['foto']; ?>" width="250px" height="400px">
            </div>
            <div class="card-content">
              <span class="card-title activator white-text">
                <h6><?= $row["nama_produk"] ?></h6>
              </span>
              <p><a href="php/detail.php?id=<?= $row['id'] ?>" class="white-text now">Buy Now!</a></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</div>