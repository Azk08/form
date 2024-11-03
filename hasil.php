<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost"; // Ganti dengan nama server MySQL Anda jika tidak menggunakan server lokal
$username = "user"; // Ganti dengan nama pengguna MySQL Anda
$password = ""; // Ganti dengan kata sandi MySQL Anda
$dbname = "Siswa"; // Ganti dengan nama database yang ingin Anda buat

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
$sql = "SELECT Nama, Tanggal Lahir, Alamat, Hobi, Email FROM tblsiswa";
$result = mysqli_query($conn, $sql);
?>
    <th>
       <tr>
       <td>Nama</td>
        <td>Tanggal Lahir</td>
        <td>Alamat</td>
        <td>Hobi</td>
        <td>email</td>
       </tr>                
       <?php
       if (mysqli_num_rows($result)>0) {
       while ($row = mysqli_fetch_assoc($result)) {
       <tr>
        <td><?php echo $row["Nama"];?> </td>
        <td><?php echo $row["Tanggal Lahir"];?></td>
        <td><?php echo $row["Alamat"];?></td>
        <td><?php echo $row["Hobi"];?></td>
        <td><?php echo $row["Email"];?></td>
       </tr> 
       <?php
       }
    }
    mysqli_close($conn);
    ?>
    </th>
</body>
</html>