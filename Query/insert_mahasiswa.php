<?php
// Require all settings
require_once(dirname(__DIR__)."/Models/Settings/Conn.php");

// Require all modules
require_once(dirname(__DIR__)."/Models/Database/Query.php");

// Ambil semua variable dari form pada halaman add.php.
// Cocokan variable dengan nama input tagnya.
// Polanya adalah: $nama_var = $_POST['nama_tag_input']

// Contoh: untuk tag input nama,
// <input type="text" name="nama" autofocus="autofocus"><br><br>
// name-nya adalah nama, maka:
// $nama = $_POST['nama']

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$fakultas = $_POST['fakultas'];
$jurusan = $_POST['jurusan'];

// Query INSERT mahasiswa ke dalam database.
$mahasiswa = new Query($conn, "
INSERT INTO mahasiswa VALUES(NULL,'{$nama}','{$fakultas}','{$jurusan}');
");

// Execute query
$mahasiswa->exec();

// Kembali ke halaman add.php.
header('Location: ../add.php');
exit();
