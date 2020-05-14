<?php

require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('Registrasi Berhasil');
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

  <title>Registrasi</title>
  <style>
    .container-regis {
      height: 200px;
      width: 350px;
      background-color: lavender;
      color: black;
      padding: 20px;
      margin: 50px auto;
      border-radius: 35px;
    }

    h3 {
      text-align: center;
      font-size: 40px;
      margin: 15px auto;
      font-family: Shrikhand;
    }

    label {
      padding-right: 40px;
      font-size: 18px;
      font-family: Libre Baskerville;
    }

    .tombol {
      margin: 15px auto;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container-regis">
    <h3>REGISTRASI</h3>
    <form action="" method="POST">
      <table>
        <tr>
          <td><label for="username">Username</label></td>
          <td>:</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td><label for="password">Password</label></td>
          <td>:</td>
          <td><input type="password" name="password"></td>
        </tr>
      </table>
      <div class="tombol">
        <button type="submit" name="register">Register</button>
      </div>
    </form>
  </div>
</body>

</html>