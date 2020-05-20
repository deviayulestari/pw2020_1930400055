<?php 
    $pakaian = [
        [
            "foto" => "sweater.jpg",
            "nama" => "Sweater Allsize Wanita",
            "ukuran" => "Allsize fit to XL",
            "warna" => "Biru-Coklat, Merah-Putih",
            "stok" => 347,
            "harga" => 150000
        ],
        [
            "foto" => "polo.jpg",
            "nama" => "Polo Shirt Pria",
            "ukuran" => "S, M, L, XL, XXL",
            "warna" => "Abu-abu, Putih, Kuning, Merah, Hitam, Pink, Biru tua, Biru muda",
            "stok" => 176,
            "harga" => 105000 
        ],
        [
            "foto" => "plisket.jpg",
            "nama" => "Rok Plisket",
            "ukuran" => "Allsize fit to L",
            "warna" => "Tosca, Choco, Cream, Navy, Abu-Abu, Hitam",
            "stok" => 724,
            "harga" => 120000
        ],
        [
            "foto" => "hoodie.jpg",
            "nama" => "Hoddie Pria/Wanita",
            "ukuran" => "L, XL, XXL",
            "warna" => "Navy, Hitam, Hijau army, Kuning, Orange, Coklat muda, Abu-abu tua",
            "stok" => 612,
            "harga" => 85000
        ],
        [
            "foto" => "batik.jpg",
            "nama" => "Blouse Batik Wanita",
            "ukuran" => "Allsize fit to L",
            "warna" => "Hitam, Biru, Coklat",
            "stok" => 583,
            "harga" => 135000
        ],
        [
            "foto" => "overall.jpg",
            "nama" => "Overall Celana Bahan Jeans Wanita",
            "ukuran" => "S, M, L, XL",
            "warna" => "Blue Jeans",
            "stok" => 356,
            "harga" => 170000
        ],
        [
            "foto" => "gamis.jpg",
            "nama" => "Gamis Muslimah",
            "ukuran" => "S, M, L, XL, XXL",
            "warna" => "Hitam, Pink, Coklat",
            "stok" => 580,
            "harga" => 245000
        ],
        [
            "foto" => "kemeja.jpg",
            "nama" => "Kemeja Kotak-Kotak Pria",
            "ukuran" => "L, XL",
            "warna" => "Dominan Hijau, Dominan Merah, Dominan Hitam",
            "stok" => 289,
            "harga" => 210000
        ],
        [
            "foto" => "bomber.jpg",
            "nama" => "Jacket Bomber Pria",
            "ukuran" => "M, L, XL",
            "warna" => "Hitam",
            "stok" => 98,
            "harga" => 135000
        ],
        [
            "foto" => "kulot.jpg",
            "nama" => "Celana Kulot",
            "ukuran" => "Allsize fit to L",
            "warna" => "Abu-abu, Hitam, cream, Pink, Navy",
            "stok" => 293,
            "harga" => 155000
        ],
        [
            "foto" => "denim.jpg",
            "nama" => "Jacket Denim",
            "ukuran" => "M, L, XL",
            "warna" => "Maroon, Orange, Hijau army",
            "stok" => 276,
            "harga" => 268000 
        ],
        [
            "foto" => "joger.jpg",
            "nama" => "Celana Joger Pria",
            "ukuran" => "S, M, L, XL, XXL",
            "warna" => "Hitam, Maroon, Navy, Abu-abu tua, Abu-abu muda, coklat, Hijau Army",
            "stok" => 865,
            "harga" => 245000 
        ],
        [
            "foto" => "outer.jpg",
            "nama" => "Outer Wanita",
            "ukuran" => "Allsize fit to XL",
            "warna" => "Pink, Hitam, Abu-abu, Navy",
            "stok" => 546,
            "harga" => 180000
        ],
        [
            "foto" => "blouse.jpg",
            "nama" => "Blouse Bunga-bunga",
            "ukuran" => "S, M, L, XL",
            "warna" => "Putih, Biru, Pink, Coklat",
            "stok" => 394,
            "harga" => 125000
        ],
        [
            "foto" => "jeans.jpg",
            "nama" => "Ripped Jeans Pria",
            "ukuran" => "M, L, XL",
            "warna" => "Blue Jeans",
            "stok" => 641,
            "harga" => 280000
        ],
    ];
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apparel(Pakaian)</title>
    <style>
        table{
            border: 1px solid black;
        }
        td, h2{
            text-align: center;
        }
        img{
            height: 250px;
        }
    </style>
</head>
<body>
        <h2>DATA APPAREL (PAKAIAN)</h2>
<table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <td><b>NO.</b></td>
            <td><b>FOTO</b></td>
            <td><b>NAMA</b></td>
            <td><b>UKURAN</b></td>
            <td><b>WARNA</b></td>
            <td><b>STOK TERSEDIA</b></td>
            <td><b>HARGA (RP.)</b></td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($pakaian as $p) : ?>
            <tr>
                <td><?= $i ?> </td>
                <td><img src="image/<?=$p["foto"]; ?>"></td>
                <td><?=$p["nama"]; ?></td>
                <td><?=$p["ukuran"]; ?></td>
                <td><?=$p["warna"]; ?></td>
                <td><?=$p["stok"]; ?></td>
                <td><?=$p["harga"]; ?></td>
            </tr>
            <?php $i++;?>
            <?php endforeach ?>
        </tr>
</table>
</body>
</html>