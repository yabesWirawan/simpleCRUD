<?php
// Include query yang ingin ditampilkan pada halaman ini
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
    <center><h1>Tambah Mahasiswa</h1></center>
    <center>
        <i>Tiap kali berhasil insert, NRP akan ke auto-increment dengan sendirinya</i>
    </center>
    <br>
    <br>

    <!-- Form tambah mahasiswa -->
    <form action="Query/insert_mahasiswa.php" method="post">

        NRP:<br>
        <input type="text" name="nrp" disabled="disabled" value=<?php echo $ai_mahasiswa->array[0]['AUTO_INCREMENT']; ?>><br><br>

        Nama Lengkap:<br>
        <input type="text" name="nama" autofocus="autofocus"><br><br>

        Fakultas:<br>
        <input type="text" name="fakultas"><br><br>

        Jurusan:<br>
        <input type="text" name="jurusan"><br><br>

        <!-- Tombol Submit: Semua data akan disubmit ke Query/insert_mahasiswa.php -->
        <center><input type="submit" value="Submit!"></center>

    </form>
    <br>
    <center><a href="index.php" class="button gray">Kembali ke halaman utama</a></center>
</body>
</html>
