<?php
include "conn.php";
// SQL query เพื่อดึงข้อมูล
$sql = "SELECT classid, classname FROM classtb";
$result = $conn->query($sql);

// ตรวจสอบว่ามีข้อมูลหรือไม่
if ($result->num_rows > 0) {
    // วนลูปและแสดงผลลัพธ์เป็น options
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['classid'] . "'>" . $row['classname'] . "</option>";
    }
} else {
    echo "0 results";
}