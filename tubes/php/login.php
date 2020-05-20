<?php

session_start();

require 'functions.php';

//cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  //ambil berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  $row = mysqli_fetch_assoc($result);

  //cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

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
  //mencocokan USERNAME dan PASSWORD 
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      //jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('hash', $hash, time() + 60 * 60 * 24);
        $hash =  hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }
      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
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

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <title>Login</title>
</head>

<body class="body-login">
  <div class="login">
    <h3>Login</h3>
    <form action="" method="POST">
      <?php if (isset($error)) : ?>
        <p style="color:red; font-style: italic;">Username atau password salah</p>
      <?php endif; ?>
      <div class="input-group">
        <input type="text" name="username" required>
        <label for="username">Username : </label>
      </div>
      <div class="input-group">
        <input type="password" name="password" required>
        <label for="password">Password : </label>
      </div>
      <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
      </div>
      <div class="input-group">
        <input type="submit" name="submit" value="login">
      </div>
    </form>
    <div class="regis">
      <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
  </div>
</body>

</html>