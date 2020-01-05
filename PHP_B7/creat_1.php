<!--hiển thị 1 form cho phép thêm sinh viên mới-->
<?php
//nhúng file config để cho phép kết nối với CSDL
require_once 'config_1.php';

$error='';
$result ='';
if(isset($_POST['submit'])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $name = $_POST['name'];
    $age = $_POST['age'];

//    nếu như để trống name hoặc age báo lỗi
    if(empty($name) || empty($age)){
        $error = "Không được để trống";
    }
    elseif($age <= 0){
        $error = "Tuổi phải là số dương";
    }
    else{
//        thực hiện insert dữ liệu lưu vào bảng students
//        tạo bảng truy vấn insert
        $sql_insert = "INSERT INTO students(`name`,`age`) VALUES('$name',$age)";
//        thực hiện truy vấn
        $is_insert = mysqli_query($connection, $sql_insert);
//        khi thực hiên xong câu truy vấn thì nên đóng kết nối lại
        mysqli_close($connection);
        if($is_insert){
//            nếu insert thành công chuyển hướng tới trang liệt kê sinh viên
            $_SESSION['success'] = "Thêm mới thành công";
        }
        else{
            $_SESSION['error'] = "Insert thất bại";
        }
        header("Location: index_1.php");
        exit();
    }
}
?>
<h3 style="color:red">
    <?php echo $error ?>
</h3>
<form action="" method="post">
    Nhập tên:
    <input type="text" name="name" value="">
    <br>
    Nhập tuổi:
    <input type="number" name="age" value="">
    <br>
    <button type="submit" name="submit">Thêm mới</button>

</form>