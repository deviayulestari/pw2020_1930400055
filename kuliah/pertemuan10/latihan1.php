<?php
// koneksi ke DB & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040055');

// query isi tabel mahasiswa 
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); //array numerik
// $row = mysqli_fetch_assoc($result); //array associative
// $row = mysqli_fetch_array($result); //keduanya
$row = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel mahasiswa 
$mahasiswa = $rows;
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
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">

  <title>Daftar Mahasiswa</title>
</head>

<body>
  <div class="utama">
    <h3 class="center">Daftar Mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nrp</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
      </tr>
      <?php $i = 1;
      foreach ($mahasiswa as $m) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $m['gambar']; ?>" width="150"></td>
          <td><?= $m['nrp']; ?></td>
          <td><?= $m['nama']; ?></td>
          <td><?= $m['email']; ?></td>
          <td><?= $m['jurusan']; ?></td>
          <td>
            <a href="">ubah</a> | <a href="">hapus</a>
          </td>
        <?php endforeach; ?>
        </tr>
    </table>
  </div>
</body>

</html>