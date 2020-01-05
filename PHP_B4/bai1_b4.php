

<form action="" method="post">
    <h2>Tutorials Point Absolute classes resgistration</h2>
    <table cellpadding="6" cellspacing="0">
        <tr>
            <td>Name:</td>
            <td>
                <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name']:"" ?>">

            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email']:"" ?>">

            </td>
        </tr>
        <tr>
            <td>Specific Time:</td>
            <td>
                <input type="date" name="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : "" ?>">

            </td>
        </tr>
        <tr>
            <td>Class details:</td>
            <td>
                <textarea name="classdetails" cols="30" rows="3">
                    <?php echo isset($classdetails) ? $classdetails : '' ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="1"> Nam
                <input type="radio" name="gender" value="2" > Nữ <br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Show info">
            </td>
            <td></td>
        </tr>
    </table>

</form>

<?php
// Code PHP xử lý validate
$error = '';
$result = '';
if (!empty($_POST['contact_action']))
{
    // Lấy dữ liệu
    $result['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $result['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $result['content'] = isset($_POST['content']) ? $_POST['content'] : '';

    // Kiểm tra định dạng dữ liệu
    require('./validate.php');
    if (empty($data['fullname'])){
        $error['fullname'] = 'Bạn chưa nhập tên';
    }

    if (empty($data['email'])){
        $error['email'] = 'Bạn chưa email';
    }
    else if (!is_email($data['email'])){
        $error['email'] = 'Email không đúng định dạng';
    }

    if (empty($data['content'])){
        $error['content'] = 'Bạn chưa nhập nội dung';
    }

    // Lưu dữ liệu
    if (!$error){
        echo 'Dữ liệu có thể lưu trữ';
        // Code lưu dữ liệu tại đây
        // ...
    }
    else{
        echo 'Dữ liệu bị lỗi, không thể lưu trữ';
    }
}
?>
