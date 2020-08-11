<?php
include('Query/select_ai_mahasiswa.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Mahasiswa</title>
    <link rel="stylesheet" href="Assets/css/master.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <center><h1>Menambahkan Mahasiswa</h1></center>
    <br>
    <br>

    <!-- Form identitas mahasiswa -->
    <form action="Query/insert_mahasiswa.php" method="post">

        NRP:<br>
        <input type="text" name="nrp" disabled="disabled" value=<?php echo $ai_mahasiswa->array[0]['AUTO_INCREMENT']; ?>><br><br>

        Nama Lengkap:<br>
        <input type="text" name="nama" autofocus="autofocus"><br><br>

        Fakultas:<br>
        <input type="text" name="fakultas"><br><br>

        Jurusan:<br>
        <input type="text" name="jurusan"><br><br>

        <center><input type="submit" value="Submit"></center>

    </form>
    <br>
    <center><a href="index.php" class="button gray">Kembali ke halaman utama</a></center>
</body>
</html>
