<?php
// functions untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040055") or die("Database salah!");

    return $conn;
}
// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload()
{
    $nama_file = $_FILES['foto']['name'];
    $tipe_file = $_FILES['foto']['type'];
    $ukuran_file = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    //ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        return 'nophoto.jpg';
    }

    //cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script> 
          alert('yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    //cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script> 
          alert('yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    //cek ukuran file
    //maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script> 
          alert('ukuran terlalu besar!');
          </script>";
        return false;
    }

    //lolos pengecekan
    //siap upload file
    //generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

//fungsi untuk menambahkan  data didalam database
function tambah($data)
{
    $conn = koneksi();

    //$foto = htmlspecialchars($data['foto']);
    //upload gambar
    $foto = upload();
    if (!$foto) {
        return false;
    }

    $nama = htmlspecialchars($data['nama']);
    $brand = htmlspecialchars($data['brand']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $warna = htmlspecialchars($data['warna']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);


    $query = "INSERT INTO pakaian
                        VALUES 
                        (null, '$foto', '$nama', '$brand', '$ukuran', '$warna', '$stok', '$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $foto_lama = htmlspecialchars($data['foto_lama']);
    $nama = htmlspecialchars($data['nama']);
    $brand = htmlspecialchars($data['brand']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $warna = htmlspecialchars($data['warna']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);

    $foto = upload();
    if (!$foto) {
        return false;
    }

    if ($foto == 'nophoto.jpg') {
        $foto = $foto_lama;
    }


    $queryubah = "UPDATE pakaian
                 SET
            foto = '$foto',
            nama_produk = '$nama',
            brand = '$brand',
            ukuran = '$ukuran',
            warna = '$warna',
            stok_tersedia = '$stok',
            harga= '$harga'
            WHERE id = $id
            ";

    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}


function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    if (empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
          alert('username / password tidak boleh kosong!');
          document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
    alert('username sudah terdaftar');
    document.location.href = 'registrasi.php';
    </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
          alert('konfirmasi password tidak sesuai!');
          document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // jika username & password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user
            VALUES
            (null, '$username', '$password_baru')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query_cari = "SELECT * FROM pakaian WHERE
            foto LIKE '%$keyword%' OR
            nama_produk LIKE '%$keyword%' OR
            brand LIKE '%$keyword%' OR
            ukuran LIKE '%$keyword%' OR
            warna LIKE '%$keyword%' OR
            stok_tersedia LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' 
            ";
    $result = mysqli_query($conn, $query_cari);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
