<!--liệt kê dah sách sinh viên đang có trong hệ thống-->
<?php
session_start();
//thực hiện kết nối tới CSDL, lấy ra tất cr bản ghi đang có trong bảng students
require_once 'config_1.php';

//tạo câu truy vấn
$sql_select = "SELECT * FROM students";

//thực thi truy vấn
$result = mysqli_query($connection, $sql_select);

//khai báo 1 mảng rỗng tương đương với việc không có bản ghi nào trả về
$students =[];
if(mysqli_num_rows($result)>0){
    $students = mysqli_fetch_all($result,MYSQLI_ASSOC);
}
echo "<pre>";
print_r($students);
echo "</pre>";


?>
<h3 style="color:red">
    <?php
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</h3>
<h3 style="color:green">
    <?php
    if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
</h3>
<a href="creat_1.php">Thêm mới</a>
<h2>Danh sách sinh viên</h2>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Ngày tạo</th>
        <th>Action</th>
    </tr>
    <?php if(empty($students)): ?>
        <tr colspan="5">Không có sinh viên nào</tr>
    <?php else: ?>
        <?php foreach($students AS $student): ?>
            <tr>
                <td>
                    <?php echo $student['id']; ?>
                </td>
                <td>
                    <?php echo $student['name']; ?>
                </td>
                <td>
                    <?php echo $student['age']; ?>
                </td>
                <td>
                    <?php echo date('d-m-Y H:i:s', strtotime($student['created_at'])) ?>
                </td>
                <td>
                    <a href="detail.php?id=<?php echo $student['id']; ?>">Chi tiết</a>
                    <a href="update.php?id=<?php echo $student['id']; ?>">Cập nhật</a>
                    <a href="delete.php?id=<?php echo $student['id']; ?>" onclick="return confim('Are you delete?')">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>