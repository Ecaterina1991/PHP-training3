<?php
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'user_db';

$connection = mysqli_connect($host, $username, $password, $database);

if(mysqli_connect_errno()) {
  die("Eroare conexiune". mysqli_connect_error());
}

?>

