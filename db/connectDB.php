<?php
// $servername = "ec2-54-169-49-30.ap-southeast-1.compute.amazonaws.com"; // EC2 Public DNS
// $username = "user";
// $password = "user";
// $dbname = "is207_database";

//WS-2
$servername = "terraform-20240924072244813800000006.ch442gso0btf.ap-southeast-1.rds.amazonaws.com"; // EC2 Public DNS
$username = "dbakaiusername";
$password = "akaistark1ngothanhsang";
$dbname = "MyDBInstance";

$port = 3306; // MySQL port

// Tạo kết nối
$connect = new mysqli($servername, $username, $password, $dbname, $port);

// Kiểm tra kết nối
if ($connect->connect_error) {
    die("Kết nối thất bại: " . $connect->connect_error);
}
echo "Kết nối thành công! Hello HAI ANH";
?>
