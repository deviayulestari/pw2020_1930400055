<?php
    // mengecek apakah ada id yang dikirimkan
    // jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    // mengambil id dari url
    $id = $_GET ['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $p = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

        <!-- my css -->
        <link rel="stylesheet" type="text/css" href="../css/latihan5c.css">

        <!-- my fonts -->
        <link href="https://fonts.googleapis.com/css?family=Shrikhand|Lobster|Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">


        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>De' Paesyeon Store</title>
  </head>
<body bgcolor="lavender">
    <div class="container-detail">
        <div class="gambar">
            <img width="200px" src="../assets/img/<?= $p["foto"]; ?>" ; alt="">
        </div>
            <div class="keterangan">
                <p><b>Nama Produk  :</b> <br><?= $p["nama_produk"]; ?></p>
                <p><b>Ukuran       :</b> <br><?= $p["ukuran"]; ?></p>
                <p><b>Warna        :</b> <br><?= $p["warna"]; ?></p>
                <p><b>Stok tersedia:</b> <br><?= $p["stok_tersedia"]; ?></p>
                <p><b>Harga        :</b> <br><?= $p["harga"]; ?></p>
            </div>

        <button class="btn waves-effect waves-light grey darken-4 grey-text text-darken-4" type="submit" name="action"><a href="../index.php">Kembali</a>
            <i class="material-icons right"><a href="../index.php">exit_to_app</a></i>
        </button>
    </div>
    
</body>
</html>