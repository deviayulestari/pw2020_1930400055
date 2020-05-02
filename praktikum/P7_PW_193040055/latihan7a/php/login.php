<?php

session_start();

require 'functions.php';
//melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
//login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  //mencocokan USERNAM dan PASSWORD 
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if ($password == $row['password']) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $row['id'];
    }
    if ($row['id'] == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
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

  <title>Login</title>
  <style>
    .container-login {
      height: 250px;
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
      margin: 25px auto;
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
  <div class="container-login">
    <h3>LOGIN</h3>
    <form action="" method="POST">
      <?php if (isset($error)) : ?>
        <p style="color:red; font-style: italic;">Username atau password salah</p>
      <?php endif; ?>
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
      <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
      </div>
      <div class="tombol">
        <button type="submit" name="submit">LOGIN</button>
      </div>
    </form>
  </div>
</body>

</html>