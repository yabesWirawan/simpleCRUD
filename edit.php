<?php
// Security prevention
$id = $_GET['id'];
if (!isset($id)) {
    header('Location: error.php');
    die();
}

// Include query yang ingin ditampilkan pada halaman ini
include('Query/select_detail_mahasiswa.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="Assets/css/master.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <center><h1>Edit Mahasiswa</h1></center>

    <!-- Display nama mahasiswa yang ingin diedit -->
    <center>
        <p>
            <?php echo $mahasiswa->array[0]['nama']; ?>
        </p>
    </center>

    <center>
        <i>Tiap kali berhasil update, user akan diarahkan kembali ke halaman daftar mahasiswa</i>
    </center>
    <br>
    <br>

    <!-- Form edit mahasiswa -->
    <form action="Query/update_mahasiswa.php" method="post">

        NRP:<br>
        <input type="text" name="nrp" readonly="readonly" value="<?php echo $mahasiswa->array[0]['nrp']; ?>"><br><br>

        Nama Lengkap:<br>
        <input type="text" name="nama" autofocus="autofocus" value="<?php echo $mahasiswa->array[0]['nama']; ?>"><br><br>

        Fakultas:<br>
        <input type="text" name="fakultas" value="<?php echo $mahasiswa->array[0]['fakultas']; ?>"><br><br>

        Jurusan:<br>
        <input type="text" name="jurusan" value="<?php echo $mahasiswa->array[0]['jurusan']; ?>"><br><br>

        <!-- Tombol Submit: Semua data akan disubmit ke Query/insert_mahasiswa.php -->
        <center><input type="submit" value="Update!"></center>

    </form>
    <br>
    <center><a href="index.php" class="button gray">Kembali ke halaman utama</a></center>
</body>
</html>
