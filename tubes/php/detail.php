<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css?family=Shrikhand|Lobster|Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>De' Paesyeon Store</title>
</head>

<body class="body-detail">
    <div class="container ">
        <div class="detail">
            <h2 class="header center">Detail Product</h2>
            <div class="card horizontal">
                <div class="card-image">
                    <img height="420px" src="../assets/img/<?= $p["foto"]; ?>">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p><b>Nama Produk :</b> <br><?= $p["nama_produk"]; ?></p>
                        <p><b>Ukuran :</b> <br><?= $p["ukuran"]; ?></p>
                        <p><b>Warna :</b> <br><?= $p["warna"]; ?></p>
                        <p><b>Stok tersedia:</b> <br><?= $p["stok_tersedia"]; ?></p>
                        <p><b>Harga :</b> <br><?= $p["harga"]; ?></p>
                    </div>
                    <div class="card-action grey darken-3">
                        <button class="btn waves-effect waves-light grey lighten-2" type="submit"><a href="#">Buy!</a>
                        </button>
                        <button class="btn waves-effect waves-light grey lighten-2" type="submit" name="action"><a href="../index.php">Back</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>