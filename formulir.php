<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="data.php" method="post">
        <center>
            <h1 class="judul">Formulir Siswa</h1>
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="Nama"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="ttgl"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="Alamat"></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td><input type="text" name="Hobi"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="Email"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="simpan" name="simpan">
                    </td>
                </tr>
            </table>
        </center>
    </form>
</body>

</html>