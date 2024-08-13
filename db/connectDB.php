<?php
$servername = "ec2-18-136-104-86.ap-southeast-1.compute.amazonaws.com"; // EC2 Public DNS
$username = "user";
$password = "user";
$dbname = "is207_database";
$port = 3306; // MySQL port

// Tạo kết nối
$connect = new mysqli($servername, $username, $password, $dbname, $port);

// Kiểm tra kết nối
if ($connect->connect_error) {
    die("Kết nối thất bại: " . $connect->connect_error);
}
echo "Kết nối thành công! Hello HAI ANH";
?>
