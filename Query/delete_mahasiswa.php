<?php
// Require all settings
require_once(dirname(__DIR__)."\Models\Settings\Conn.php");

// Require all modules
require_once(dirname(__DIR__)."\Models\Database\Query.php");

$id = $_GET['id'];

$check = new Query($conn,"SELECT nrp FROM MAHASISWA WHERE nrp = '{$id}'");
$check->exec();

$mahasiswa = new Query($conn, "
DELETE FROM MAHASISWA WHERE nrp = '{$id}';
");
$mahasiswa->exec();
