<?php
session_start(); // hiển thị tình hình cập nhật
//thực hiện xóa student
//lấy giá trị của id từ url
//check trường hợp không truyền lên id

if(!isset($_GET['id'])){
    $_SESSION['error'] = "Tham số id không hợp lệ";
    header("Location: index_1.php");
    exit();
}
//check trường hợp có tham số id, nhưng id lại không phải số
$id = $_GET['id'];
//kết nối tới DB, thực hiện truy vấn xóa
require_once 'config_1.php';

//tạo truy vấn
$sql_delete = "DELETE FROM students WHERE id= $id";

//thực thi truy vấn
$is_delete = mysqli_query($connection, $sql_delete);
if($is_delete){
    $_SESSION['success'] = "Xóa bản ghi $id thành công";
}
else{
    $_SESION['error'] = "Xóa bản ghi $id thất bại";
}
header("Location: index_1.php");
exit();