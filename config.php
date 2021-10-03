<?php
$server = "localhost";
$username = "root";
$pass = "";
$database = "webprog-assign1";

$conn = mysqli_connect($server, $username, $pass, $database);

if (!$conn) {
  die('<script>alert("Connection Failed!")</script>');
}