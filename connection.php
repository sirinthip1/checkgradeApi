<?php
$dbuser = "root";
$dbpass = "";
$dbname = "schooidb2";

$conn = new PDO("mysql:host=localhost;port=3306;dbname=".$dbname,$dbuser,$dbpass);

$conn->query('SET NAMES UTF8');

date_default_timezone_set('Asia/Bangkok');
?>