<?php
// Require all settings
require_once(dirname(__DIR__)."/Models/Settings/Conn.php");

// Require all modules
require_once(dirname(__DIR__)."/Models/Database/Query.php");

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$fakultas = $_POST['fakultas'];
$jurusan = $_POST['jurusan'];

// Query INSERT mahasiswa ke dalam database
$mahasiswa = new Query($conn, "
UPDATE mahasiswa
SET nama='{$nama}',
    fakultas='{$fakultas}',
    jurusan='{$jurusan}'
WHERE nrp='{$nrp}';
");

// Execute query
$mahasiswa->exec();

// Kembali ke halaman index.php
header('Location: ../index.php');
exit();
