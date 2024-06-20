<?php
$servername= "localhost";
$username= "root";
$password= "cdti1234"; //ใน xamppไม่ต้องระบุ password
$dbname= "db"; //กำหนดชื่อฐำนข้อมูล
// Create connection
$conn= new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error) {
die("Connection failed: ". $conn->connect_error);
}
?>