<?php

require 'functions.php';

if (isset($_POST["registrasi"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('Registrasi Berhasil, Silahkan Login!');
    document.location.href ='login.php';
    </script>";
  } else {
    echo "<script>
    alert('Registrasi Gagal');
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css?family=Shrikhand|Lobster|Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <title>Registrasi</title>
</head>

<body class="body-registrasi">
  <div class="registrasi">
    <h3>REGISTRASI</h3>
    <form action="" method="POST">
      <div class="input-group">
        <input type="text" name="username" required>
        <label for="username">Username : </label>
      </div>
      <div class="input-group">
        <input type="password" name="password1" required>
        <label for="password">Password : </label>
      </div>
      <div class="input-group">
        <input type="password" name="password2" required>
        <label for="password">Konfirmasi Password : </label>
      </div>
      <div class="input-group">
        <input type="submit" name="registrasi" value="registrasi">
      </div>
    </form>
    <button> <a href="../index.php">Cancel </a></button>
  </div>
</body>

</html>