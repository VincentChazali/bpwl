<?php 
$databaseHost = 'localhost';
$databaseName = 'Wisata';
$databaseUsername = 'root';
$databasePassword = '';

$conn = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if ($conn -> connect_errno) {
	echo die ("Gagal Menghubungkan ke Database".$conn->connect_error);
}

 ?>