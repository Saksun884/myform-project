<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "งาน";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("เชื่อมต่อไม่สำเร็จ: " . $conn->connect_error);
}
echo "เชื่อมต่อฐานข้อมูลสำเร็จ!";
?>
