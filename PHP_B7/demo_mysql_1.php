<?php
//địa chỉ tới DB
const DB_HOST = 'localhost';
//đây là tài khoản mặc định mà XAMPP đã tạo sẵn
const DB_USERNAME = 'root';
//mật khẩu kết nối vào DB
//đây là pasword mặc định mà khi cài XAMPP đã tạo sẵn

const DB_PASSWORD = '';
//tạo DB muốn kết nối
const DB_NAME = 'db_19';
//cổng kết nối vào DB
const  DB_PORT = 3306;

//Thực hiện kết nối với csdl, mysql sử dụng php
$connection = mysqli_connect(DB_HOST, DB_USERNAME,DB_PASSWORD, DB_NAME,DB_PORT);

//Nếu kết nối không thành công thì hiển thị thông báo lỗi

if(!$connection){
    die("Kết nối thất bại kết, chi tiết lỗi: ". mysqli_connect_error());

}
echo "Kết nối tới csdl".DB_NAME. "Thành công";
//với trường hợp lưu bị lỗi font sử dụng hàm sau
mysqli_query($connection,"SET NAMES 'utf8'");
//dungf php để thêm dữ liệu vào bảng students
//sử dụng `` để bao các trường, để tránh trường hợp tên trường trùng với từ khóa trong sql

$sql_insert = "INSERT INTO students(`name`, `age`) VALUES('vananh',20), ('ABC', 123)" ;
////thực thi câu truy vấn vừa tạo với truy vấn insert, update, delete thì hàm mysqli_query sẽ trả về giá trị boolean
////với truy vấn select -> hàm sẽ trả về 1 đối tượng, không phải kiểu boolean
$is_insert=mysqli_query($connection, $sql_insert);
echo "<br>";
if($is_insert){
    echo "insert thành công";
}
else{
    echo "insert thất bại";
}

//chức năng update
//update tên = New Name cho các bản ghi mà có id<5
$sql_update = "UPDATE students SET `name` = 'New Name' WHERE id<5";
$is_update = mysqli_query($connection, $sql_update);
if($is_update){
    echo "Update thành công";
}
else{
//    tring trường hợp update thất bại, thường sẽ không báo lỗi cụ thể là gì
//thì nên coppy câu truy vấn chạy trực tiếp trong tab sql của phpmyadmin để xem có bị lỗi không

    echo "Update thất bại";
}

//chức năng xóa
//xóa các bàn ghi có id<8
$sql_delete = "DELETE FROM students WHERE id<8";
$is_delete = mysqli_query($connection, $sql_delete);
if($is_delete){
    echo "Xóa bản ghi có id>8 thành công";
}
else{
    echo "xóa bản ghi có id>8 thất bại";
}
//chức năng liệt kê lấy ra thông tin tất cả dữ liệu trong bảng students

$sql_select = "SELECT * FROM students";
$result = mysqli_query($connection, $sql_select);
//echo "<pre>";
//print_r($result);
//echo "</pre>";
//kiểm tra xem bản ghi có trả về từ câu truy vấn select hay không
if(mysqli_num_rows($result)>0){
//    lấy ra kiểu dữ liệu mong muốn
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    foreach($students as $student){
//            hiển thị giá trị 1 mảng trong dấu nháy kép sử dụng ngặc {}
        echo "Tên: {$student['name']}";
        echo "<br>";
        echo "Tuổi: {$student['age']}";
        echo "<br>";
//            $created_at = $student['created_at'];
        $created_at = date('d-m-Y H:i:s',strtotime($student['created_at']));
        echo "Ngày tạo: $created_at";
        echo "<br>";
    }
    //crud



}



?>


