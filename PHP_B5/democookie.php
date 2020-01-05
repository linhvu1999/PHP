<?php
//PHP tạo sẵn 1 biến mảng $_COOKIE
// khởi tạo cookie
setcookie('username', 'linh', time() + 3600);
//lấy giá trị cảu cookie



// xóa cookie bằng việc setcookie đó, nhưng thời gian để âm
setcookie('username','', time() - 1);

//dùng isset kiểm tra cookie đó đã tồn tại rồi
if (isset($_COOKIE['username'])){
    $username = $_COOKIE['username']; //linh
    echo $username; // linh
}