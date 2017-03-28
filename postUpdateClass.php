<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/28/2017
 * Time: 7:00 PM
 */
//TODO Xử lý lưu Class
//1. Lấy Data
//2. Khởi tạo Mysql
//3. Lưu Vào DB
//4. Thông báo thành công
$dataClass = $_POST;

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "my_db1";
//Init connect
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Lỗi kết nối" . $conn->connect_error;
    die;
} else {
    echo "Kết nối thành công" .'<br>';
}

$classId = $_POST['id'];
$className = $_POST['name'];
$sql = "UPDATE Class SET name='$className' WHERE id=$classId";

if ($conn->query($sql) === TRUE) {
    echo "Cập nhật thông tin Lớp học thành công";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();