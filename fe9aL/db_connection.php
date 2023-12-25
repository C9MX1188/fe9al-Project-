<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'fe9aL';

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}
?>
