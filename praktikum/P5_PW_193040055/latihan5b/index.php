<?php 
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    //melakukan query
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
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!-- my css -->
        <link rel="stylesheet" type="text/css" href="css/latihan5b.css">

        <!-- my fonts -->
        <link href="https://fonts.googleapis.com/css?family=Shrikhand|Lobster|Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">


        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>De' Paesyeon Store</title>
      <style>

      </style>
  </head>
  <body id="home" class="scrollspy">

  <!-- navbar -->
    <div class="navbar-fixed">
      <nav class="grey darken-4">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#home" class="brand-logo">De' Paesyeon Store</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a class="brown-text text-lighten-4" href="#product">Product</a></li>
                <li><a class="brown-text text-lighten-4" href="#payment">Payment</a></li>
                <li><a href="#login" class="btn  red accent-2 grey-text text-darken-4"> Login</a></li>
              </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- sidenav-->
      <ul class="sidenav" id="mobile-nav">
          <li><a href="#product">Product</a></li>
          <li><a href="#payment">Payment</a></li>
          <li><a href="#login" class="btn red accent-2">Login</a></li>
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
          <table class="centered" border="1" cellpadding="3" cellspacing="0">
              <tr>
                  <td><b>NO.</b></td>
                  <td><b>FOTO</b></td>
                  <td><b>NAMA PRODUK</b></td>
                  <td><b>BRAND</b></td>
                  <td><b>UKURAN</b></td>
                  <td><b>WARNA</b></td>
                  <td><b>STOK TERSEDIA</b></td>
                  <td><b>HARGA (RP.)</b></td>
              </tr>
              <?php $i = 1; ?>
              <?php foreach ($pakaian as $p) : ?>
              <tr>
                  <td><?= $i ?> </td>
                  <td><img src="assets/img/<?=$p["foto"]; ?>"></td>
                  <td><?=$p["nama_produk"]; ?></td>
                  <td><?=$p["brand"]; ?></td>
                  <td><?=$p["ukuran"]; ?></td>
                  <td><?=$p["warna"]; ?></td>
                  <td><?=$p["stok_tersedia"]; ?></td>
                  <td><?=$p["harga"]; ?></td>
              </tr>
              <?php $i++;?>
              <?php endforeach; ?>
          </table>
      </div>
  </section>
  <!-- akhir product -->

  <!-- payment -->
  <section id="payment" class="parallax-container scrollspy">
      <div class="parallax"><img src="assets/img/bg_parallax/parallax.jfif"></div>

        <div class="container payment">
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

  <!-- login -->
  <section id="login" class="login brown lighten-4 scrollspy">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 ">
            <div class="card-panel grey darken-4 center brown-text text-lighten-4">
              <i class="material-icons">email</i>
              <h5>Contact</h5>
              <p>Jika ada kendala atau masalah silahkan hubungi kami dengan mengirimkan email ke alamat dpstore@gmail.com</p>
            </div>
            <div>
              <ul class="collection with-header brown-text text-lighten-4">
                <li class="collection-header grey darken-4"><h4>Our Store</h4></li>
                <li class="collection-item grey darken-4">De' Paesyeon Store</li>
                <li class="collection-item grey darken-4">Jl. GA Manulang, Padalarang, Kab. Bandung Barat</li>
                <li class="collection-item grey darken-4">West Java, Indonesia</li>
              </ul>
            </div>
          </div>

          <div class="col m7 s12">
            <form>
              <div class="card-panel grey darken-4 brown-text text-lighten-4">
                  <h5>Log in</h5>
                    <div class="input-field">
                      <i class="material-icons prefix">email</i>
                      <input type="email" name="email" id="email" class="validate">
                      <label for="email">E-mail</label>
                    </div>
                    <div class="input-field">
                      <i class="material-icons prefix">lock</i>
                      <input type="password" name="password" id="password" class="validate">
                      <label for="password">Password</label>
                    </div>
                    <button type="submit" class="btn red accent-2 grey-text text-darken-4">Log In</button>

                  <h5 class="border">Didn't have an account? <br> Please fill out this form for registation</h5>
                    <div class="input-field">
                      <i class="material-icons prefix">account_circle</i>
                      <input type="text" name="name" id="name" required class="validate">
                      <label for="name"> Name</label>
                    </div>
                    <div class="input-field">
                      <i class="material-icons prefix">email</i>
                      <input type="email" name="email" id="email" class="validate">
                      <label for="email">E-mail</label>
                    </div>
                    <div class="input-field">
                      <i class="material-icons prefix">lock</i>
                      <input type="password" name="password" id="password" class="validate">
                      <label for="password">Password</label>
                    </div>
                    <div class="input-field">
                      <i class="material-icons prefix">local_phone</i>
                      <input type="text" name="phone" id="phone">
                      <label for="phone">Phone Number</label>
                    </div>
                    <button type="submit" class="btn red accent-2 grey-text text-darken-4">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div> 
    </section>
  <!-- akhir login -->

  <!-- footer -->
    <footer class="grey darken-4 red-text text-accent-2 center">
      <p class="flow-text">De' Paesyeon by Devi Ayu Lestari 2020</p>
    </footer>
  <!-- akhir footer -->


        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
          const sidenav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sidenav);

          const slider = document.querySelectorAll('.slider');
          M.Slider.init(slider, {
              indicators : false,
              height : 650,
              transition : 600,
              interval : 3000
            });
    
            const parallax = document.querySelectorAll('.parallax');
            M.Parallax.init(parallax);

            const scroll = document.querySelectorAll('.scrollspy');
            M.ScrollSpy.init(scroll,{
              scrollOffset: 50
            });
        </script>

  </body>
</html>