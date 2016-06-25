<?php
require(dirname(__DIR__)."\Database\Connect.php");

$conn = new Connect("localhost","root","","test");
$conn->connectToDB();
$conn->checkConnection();
