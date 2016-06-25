<?php
// Require all settings
require_once(dirname(__DIR__)."\Models\Settings\Conn.php");

// Require all modules
require_once(dirname(__DIR__)."\Models\Database\Query.php");

// Query SELECT data mahasiswa berdasarkan id dari database
// Variable $id didapatkan dari halaman edit.php
$mahasiswa = new Query($conn, "SELECT * FROM MAHASISWA WHERE nrp='$id'");

// Execute query
$mahasiswa->exec();

// For DEBUGGING: uncomment PHP statement bellow
// print_r($mahasiswa->array);
