<?php
$servername = "localhost"; // Ganti dengan nama server MySQL Anda jika tidak menggunakan server lokal
$username = "user"; // Ganti dengan nama pengguna MySQL Anda
$password = ""; // Ganti dengan kata sandi MySQL Anda
$dbname = "Siswa"; // Ganti dengan nama database yang ingin Anda buat

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
if (isset($_POST['simpan'])) {
    $nama=$_POST['nama']
    $tanggallahir=$_POST['Tanggal Lahir']
    $alamat=$_POST['Alamat']
    $hobi=$_POST['Hobi']
    $email=$_POST['Email']
    $sql="INSERT INTO `tblsiswa` (`nama`, `tanngal lahir`, `alamat`, `hobi`, `email`) VALUES ('$nama', '$tanggallahir', '$alamat', '$hobi', '$email')";
    $hasil=mysqli_query($conn,$sql);
    if (!$hasil) {
        echo "data tidak berhasil di simpan";
    }else {
        echo "data berhasil di simpan";
    }
}
header("location:formulir.php")
?>
