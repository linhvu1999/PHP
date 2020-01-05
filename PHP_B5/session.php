<?php
session_start(); // khai báo đầu file
// PHP tạo ra biến toàn cục $_SESSION
//bắt buộc phải khởi tạo session thì mới có thể sd $_SESSION

//thêm dữ liệu cho session, chính là thao tac vs mảng
$_SESSION['age'] = 15;
$_SESSION['name'] = "Linh";
$_SESSION['arr'] = [1,2,3];

//lấy dữ liệu của $_session
$name = $_SESSION['name']; //Linh
$age = $_SESSION['age']; //15
$arr = $_SESSION['arr']; //[1,2,3]

//xóa sữ liệu của session
unset($_SESSION['name']); // xóa phần tử name trong $_SESSION
//muốn xóa toàn bộ session trên hệ thống
//session_destroy();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";