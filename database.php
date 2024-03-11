<?php

$errors = array();
$database = 'jwosh';
$username = 'root';
$host = 'localhost';
$password = '';

//\$database = 'if0_36118607_pinayan';
//$username = 'if0_36118607';
//$host = 'sql308.infinityfree.com';
//$password = 'CkaHPTMMA5Km86a';
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | E_DEPRECATED | E_STRICT);
// error_reporting(0);

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error());
}

if (!isset($_SESSION)) {
  session_start(); //initialize $_SESSION
}
