<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('user baru berhasil ditambahkan. Silahkan login!');
          document.location.href = 'login.php';
        </script>";
  } else {
    echo 'user gagal ditambahkan!';
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
  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">

  <title>Registrasi</title>
  <style>
    /* halaman login.php */
    .container-registrasi {
      height: 200px;
      width: 400px;
      background-color: lavender;
      color: black;
      padding: 20px;
      margin: 50px auto;
      border-radius: 35px;
    }

    .container-registrasi h3 {
      text-align: center;
      font-size: 40px;
      margin: 15px auto;
      font-family: Shrikhand;
    }

    .container-registrasi label {
      font-size: 18px;
      font-family: Libre Baskerville;
    }

    .container-registrasi .tombol {
      margin: 15px auto;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container-registrasi">
    <h3>Form Registrasi</h3>
    <form action="" method="POST">
      <table>
        <tr>
          <td>
            <label>
              Username
          </td>
          <td>:</td>
          <td>
            <input type="text" name="username" autofocus autocomplete="off" required>
            </label>
          </td>
        </tr>
        <tr>
          <td>
            <label>
              Password
          </td>
          <td>:</td>
          <td>
            <input type="password" name="password1" required>
            </label>
          </td>
        </tr>
        <tr>
          <td>
            <label>
              Konfirmasi Password
          </td>
          <td>:</td>
          <td>
            <input type="password" name="password2" required>
            </label>
          </td>
        </tr>
      </table>
      <div class="tombol">
        <button type="submit" name="registrasi">Registrasi!</button>
      </div>
    </form>
  </div>
</body>

</html>