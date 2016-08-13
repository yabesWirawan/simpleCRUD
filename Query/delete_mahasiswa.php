<?php
// Require all settings
require_once(dirname(__DIR__)."/Models/Settings/Conn.php");

// Require all modules
require_once(dirname(__DIR__)."/Models/Database/Query.php");

$id = $_GET['id'];

$check = new Query($conn,"SELECT nrp FROM mahasiswa WHERE nrp = '{$id}'");
$check->exec();

$mahasiswa = new Query($conn, "
DELETE FROM mahasiswa WHERE nrp = '{$id}';
");
$mahasiswa->exec();
