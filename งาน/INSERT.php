<?php
include 'connect.php'; // เรียกใช้การเชื่อมต่อ

$name  = $_POST['name'];
$email = $_POST['email'];
$age   = $_POST['age'];

$sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "บันทึกข้อมูลเรียบร้อย! <a href='select.php'>ดูข้อมูลทั้งหมด</a>";
} else {
    echo "เกิดข้อผิดพลาด: " . $conn->error;
}

$conn->close();
?>
