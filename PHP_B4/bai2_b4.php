<?php
$error = '';
$result = '';
if (isset($_POST['submit'])){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        //tao cac bien trung gian luu gt
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];
        $display_name = $_POST['display_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        //check validate
        if (empty($_POST['username'])){
            $error =  'Username không được để trống';
        }
        else if (empty($_POST['password'])){
            $error =  'Password không được để trống';
        }
        else if (!isset($_POST['user_type'])){
            $error = 'Cần chọn user type';
        }
        else if (empty($_POST['display_name'])){
            $error =  'Display Name không được để trống';
        }
        else if (strlen($_POST['display_name']) > 24){
            $error =  'Display Name không được dài quá 24 kí tự';
        }
        else if (empty($_POST['address'])){
            $error =  'Address không được để trống';
        }
        else if (empty($email)){
            $error = "Email khong de trong";
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "Email chua dung dinh dang";
        }
        else if (!isset($_POST['gender'])){
            $error = "Can phai chon gender";
        }
        else{
            $result .=  'Đăng ký thành công<br>';
            $result .= "User Name: $username<br>";
            $result .= "Password: $password<br>";

            $user_type = $_POST['user_type'];
            $user_type_text = '';
            switch ($user_type){
                case 0: $user_type = '--Select--'; break;
                case 1: $user_type = 'A'; break;
                case 2: $user_type = 'B'; break;
            }
            $result .= "User type: $user_type<br>";

            $result .= "Display Name: $display_name<br>";
            $result .= "Address: $address<br>" ;
            $result .= "Email: $email<br>";

            $gender = $_POST['gender'];
            $gender_text = '';
            switch ($gender){
                case 0: $gender_text = 'Male';
                    break;
                case 1: $gender_text = 'Female';
                    break;
            }
            $result .= "Gender: $gender_text";


        }
    }
?>

<h3 style="color: red">
    <?php echo $error ?>
</h3>
<h3 style="color: #00bf00">
    <?php echo $result ?>
</h3>

<!DOCTYPE html>
<html>
<head>
    <title>Bài 2</title>
    <meta charset="utf-8">
    <style>
        .form1{

            background: #00bfbf;
            color: #fff;
        }
        .form1 .form2{
            text-align: center;
            background: #2E64FE;
        }
    </style>
</head>
<body>

<form action="" method="post">
    <table border="1" cellspacing="0" cellpadding="6" class="form1">
        <tr class="form2">
            <td colspan="2">
                Rgistration Form
            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="username" value="<?php echo isset($_POST['username'])? $_POST['username']: ''?>"/>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password" value="<?php echo isset($_POST['password'])? $_POST['password']: ''?>"/>
            </td>
        </tr>
        <tr>
            <td>User Type</td>
            <td>
                <select name="user_type">
                    <option value="0">--Select--</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Display Name</td>
            <td>
                <input type="text" name="display_name" value="<?php echo isset($_POST['display_name'])? $_POST['display_name']:''?>"/>
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td>
                <textarea cols="30" rows="4" name="address"><?php echo isset($_POST['address'])? $_POST['address']:''?></textarea>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="email" value="<?php echo isset($_POST['email'])? $_POST['email']:'' ?>"/>
            </td>
        </tr>
        <tr>

            <?php
            $check_female = '';
            $check_male = '';
            if (isset($_POST['gender'])){
                switch ($gender){
                    case 0: $check_male = "checked=true";
                        break;
                    case 1: $check_female = "checked = true";
                        break;
                }
            }
            ?>
            <td>Gender</td>
            <td>
                <input <?php echo $check_male ?>
                    type="radio" name="gender" value="0">Male
                <input <?php echo $check_female ?>
                    type="radio" name="gender" value="1">Female
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="checkbox" name="checkbox[]" value="1">I accept Terms and Conditions
            </td>
        </tr>
        <tr class="form2">
            <td colspan="2">
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
</body>
</html>




