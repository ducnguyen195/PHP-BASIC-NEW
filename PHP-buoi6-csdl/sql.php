<?php
$host = "127.0.0.1";
$username = "root";
$database = 'test1';
$password = "";

$connection = new mysqli($host, $username, $password);

if ($connection->connect_error) {
    echo ("Kết nối thất bại: " . $connection->connect_error)."<br>";
}
echo "Đã kết nối thành công đến CSDL"."<br>";


$query ="CREATE DATABASE ".$database;
if ($connection->query( $query) === TRUE) {
    echo "Đã tạo CSDL thành công <br>";
} else {
    echo "Có lỗi khi tạo CSDL: " . $connection->error ."<br>";
}
$connection->close();