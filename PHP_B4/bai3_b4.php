<?php
$error = '';
$result = '';
if (isset($_POST['submit'])) {
    echo '<pre>';
    print_r($_POST);
    echo "</pre>";

    $email = $_POST['email'];
    $password = $_POST['password'];
    $academic  = $_POST['academic'];
    $course = $_POST['course'];
    $concen = $_POST['concen'];
    $message = $_POST['message'];


    if (empty($_POST['email'])) {
        $error =  'Email không được để trống';
    }
    else if (empty($_POST['password'])) {
        $error =  'Password không được để trống';
    }
    else if(strlen($_POST['password']) < 8) {
        $error =  'Password phải có độ dài tối thiểu 8 ký tự';
    }
    else {
        $result .=  'Đăng ký thành công!<br>';
        $result .=  'Thông tin củ bạn:';
        $result .= "Email: $email<br>";
        $academicText = '';
        switch ($_POST['academic']) {
            case 1: $academicText = 'Freshman';break;
            case 2: $academicText = 'Freshman2';break;
            case 3: $academicText = 'Freshman3';break;
        }
        $result .= "Select academy: $academic<br>" ;

        $checkboxText = '';
        if (isset($_POST['course'])) {
            $checkboxArr = $_POST['course'];
            foreach ($checkboxArr as $value) {
                switch ($value) {
                    case 0: $checkboxText .= 'CSCI 1710 <br />';break;
                    case 1: $checkboxText .= 'CSCI 1711 <br />';break;
                    case 2: $checkboxText .= 'CSCI 1712 <br />';break;
                    case 3: $checkboxText .= 'CSCI 1713 <br />';break;
                    case 4: $checkboxText .= 'CSCI 1714 <br />';break;
                }
            }
            $result .= "Token: $checkboxText";
        }

        $radioText = '';
        if (isset($_POST['concen'])) {
            switch ($_POST['concen']) {
                case 0: $radioText = 'Computer Sience 0';break;
                case 1: $radioText = 'Computer Sience 1';break;
                case 2: $radioText = 'Computer Sience 2';break;
            }
            $result .= 'Select concentration:' .$radioText. '</br>';
        }
        $result .= "Message: $message<br>";
    }
}
?>

<h4 style="color: red">
    <?php echo $error ?>
</h4>
<h4 style="color:blue">
    <?php echo $result ?>
</h4>


<!DOCTYPE html>
<html>
<head>
    <title>Bài 3</title>
</head>
<body>
<form action="" method="post">
    <table cellspacing="0" cellpadding="5" border="1">
        <tr>
            <td>Enter email-address</td>
            <td>
                <input type="email" name="email" value="<?php echo isset($_POST['email'])? $_POST['email']:''?>"/>
            </td>
        </tr>
        <tr>
            <td>Enter password</td>
            <td>
                <input type="password" name="password" value="<?php echo isset($_POST['password'])? $_POST['password']:''?>"/>
            </td>
        </tr>
        <tr>
            <td>Select academic level</td>
            <td>
                <select name="academic">
                    <option value="1">Freshman</option>
                    <option value="2">Freshman2</option>
                    <option value="3">Freshman3</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Identify course taken:</td>
            <td>
                <input type="checkbox" name="course[]" value="0"/> CSCI 1710 <br/>
                <input type="checkbox" name="course[]" value="1"/> CSCI 1711 <br/>
                <input type="checkbox" name="course[]" value="2"/> CSCI 1712 <br/>
                <input type="checkbox" name="course[]" value="3"/> CSCI 1713 <br/>
                <input type="checkbox" name="course[]" value="4"/> CSCI 1714 <br/>
            </td>
        </tr>
        <tr>
            <td>Select concentration:</td>
            <td>
                <input type="radio" name="concen" value="0"> Computer Sience 0<br/>
                <input type="radio" name="concen" value="1"> Computer Sience 1<br/>
                <input type="radio" name="concen" value="2"> Computer Sience 2<br/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <textarea name="message" rows="5"  cols="35" placeholder="Nhập message"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Submit data" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>

