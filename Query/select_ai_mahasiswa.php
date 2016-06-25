<?php
// Require all settings
require_once(dirname(__DIR__)."\Models\Settings\Conn.php");

// Require all modules
require_once(dirname(__DIR__)."\Models\Database\Query.php");

// Query SELECT nilai autoincrement terakhir dari table mahasiswa
$ai_mahasiswa = new Query($conn,"
SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'test'
AND   TABLE_NAME   = 'mahasiswa';
");

// Execute query
$ai_mahasiswa->exec();

// For DEBUGGING: uncomment PHP statement bellow
// print_r($ai_mahasiswa->array);
