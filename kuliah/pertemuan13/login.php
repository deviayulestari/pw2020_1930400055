<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">

  <title>Login</title>
  <style>
    /* halaman login.php */
    .container-login {
      height: 215px;
      width: 350px;
      background-color: lavender;
      color: black;
      padding: 20px;
      margin: 50px auto;
      border-radius: 35px;
    }

    .container-login h3 {
      text-align: center;
      font-size: 40px;
      margin: 15px auto;
      font-family: Shrikhand;
    }

    .container-login label {
      padding-right: 40px;
      font-size: 18px;
      font-family: Libre Baskerville;
    }

    .container-login .tombol {
      margin: 15px auto;
      text-align: center;
    }

    .container-login .registrasi {
      font-size: 15px;
      font-family: Libre Baskerville;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container-login">
    <h3>Form Login</h3>
    <?php if (isset($login['error'])) : ?>
      <p style="color: red; font-style:italic;"><?= $login['pesan']; ?></p>
    <?php endif; ?>
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
        <button type="submit" name="login">LOGIN</button>
      </div>
      <div class="registrasi">
        <a href="registrasi.php">Tambah User Baru</a>
      </div>
    </form>
  </div>
</body>

</html>