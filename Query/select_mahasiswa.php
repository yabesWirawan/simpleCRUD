<?php
// Require all settings
require_once(dirname(__DIR__)."/Models/Settings/Conn.php");

// Require all modules
require_once(dirname(__DIR__)."/Models/Database/Query.php");

// Query SELECT semua data mahasiswa dari database
$mahasiswa = new Query($conn, "SELECT * FROM mahasiswa");

// Execute query
$mahasiswa->exec();

// For DEBUGGING: uncomment PHP statement bellow
// print_r($mahasiswa->array);
