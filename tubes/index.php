<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

//melakukan query
$pakaian = query("SELECT * FROM pakaian");

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
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css?family=Shrikhand|Dancing+Script|Lobster|Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">


  <title>De' Paesyeon Store</title>
</head>

<body id="home" class="body-index scrollspy">

  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="brown darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">De' Paesyeon Store</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="brown-text text-lighten-4" href="#product">Product</a></li>
            <li><a href="php/login.php" class="btn  red accent-2 grey-text text-darken-4">Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#product">Product</a></li>
    <li><a href="php/login.php" class="btn  red accent-2 grey-text text-darken-4">Admin</a></li>
  </ul>
  <!-- akhir navbar -->

  <!-- slider -->
  <div class="slider">
    <div class="container">
      <ul class="slides">
        <li>
          <img src="assets/img/slider/1.jfif">
          <div class="caption center-align">
            <h3 class="light red-text text-accent-2">"What you wear is how you present yourself to the world, especially today, when human contacts are so quick. Fashion is instant language." —Miuccia Prada</h3>
          </div>
        </li>
        <li>
          <img src="assets/img/slider/2.jfif">
          <div class="caption center-align">
            <h3 class="light red-text text-accent-2">"Trendy is the last stage before tacky." —Karl Lagerfeld</h3>
          </div>
        </li>
        <li>
          <img src="assets/img/slider/3.jfif">
          <div class="caption center-align">
            <h3 class="light red-text text-accent-2">"Fashion you can buy, but style you possess. The key to style is learning who you are, which takes years. There's no how-to road map to style. It's about self expression and, above all, attitude." —Iris Apfel</h3>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- akhir slider -->

  <!-- product -->
  <section id="product" class="product brown lighten-4 scrollspy">
    <div class="container center">
      <h3 class="center light grey-text text-darken-3">De' Paesyeon Store Products</h3>
      <div class="row"></div>
      <div class="row">
        <div class="col s1"></div>
        <form action="" method="POST">
          <div class="col s10">
            <div class="card-panel">
              <div class="row">
                <div class="col s1"><i class="material-icons prefix">search</i></div>
                <div class="col s11"><input type="text" name="keyword" size="50" autofocus placeholder="Apa yang ingin anda cari?" autocomplete="off" autofocus class="keyword"></div>
              </div>
            </div>
          </div>
          <button class="btn brown lighten-2" type="submit" name="cari" class="tombol-cari" style="display:none;">Cari!</button>
        </form>
        <div class="col s1"></div>
      </div>

      <h4 class="center light grey-text text-darken-3">List Version</h4>
      <div class="container-product">
        <div class="row s8">
          <ul class="collection with-header">
            <li class="collection-header">
              <h2 class="judul brown-text text-darken-4">Klik to view more info!</h2>
            </li>
            <?php if (empty($pakaian)) : ?>
              <tr>
                <td colspan="5">
                  <h3>Data tidak ditemukan</h3>
                </td>
              </tr>
            <?php else : ?>
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
              <div class="col m4 s4">
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
          <?php endif; ?>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir product -->

  <!-- payment -->
  <section id="payment" class="parallax-container scrollspy">
    <div class="parallax"><img src="assets/img/bg_parallax/parallax.jfif"></div>

    <div class="container-payment">
      <h3 class="center red-text text-accent-2">Payment partners</h3>
      <div class="row">
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/bri.png">
        </div>
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/bca.png">
        </div>
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/mandiri.png">
        </div>
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/bjb.png">
        </div>
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/bni.png">
        </div>
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/btn.png">
        </div>
      </div>
      <div class="row">
        <div class="col m4 s12 center">
          <img src="assets/img/payment_partners/indomaret.png">
        </div>
        <div class="col m4 s12 center">
          <img src="assets/img/payment_partners/alfamidi.png">
        </div>
        <div class="col m4 s12 center">
          <img src="assets/img/payment_partners/alfamart.png">
        </div>
      </div>
    </div>
  </section>
  <!-- akhir payment -->

  <!-- footer -->
  <footer class="page-footer brown darken-4 ">
    <div class="footer-copyright">
      <div class="container center red-text text-accent-2">
        <h5> © 2020 by Devi Ayu Lestari </h5>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50
    });

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 650,
      transition: 600,
      interval: 3000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);
  </script>

  <script src="js/script.js"></script>
</body>

</html>