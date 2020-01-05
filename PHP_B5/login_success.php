<?php
session_start();
//trang logout se xóa hết toàn bộ session liên quan đến user đăng  nhập và chuyển hướng user về index
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
unset($_SESSION['username']);
//session_destroy(); // xóa tất cả
$_SESSION['success'] = "Đăng xuất thành công";
// chuyển hướng về index.php
header("Location: form_login.php");
exit();