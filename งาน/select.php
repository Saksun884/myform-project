<?php
include 'connect.php';

$sql = "SELECT id, name, email, age FROM users";
$result = $conn->query($sql);

echo "<h2>รายชื่อสมาชิก</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
              <th>ID</th>
              <th>ชื่อ</th>
              <th>Email</th>
              <th>อายุ</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["age"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "ไม่พบข้อมูล";
}

$conn->close();
?>
