<?php
session_start();
// TH user đã đăng nhập rồi mà cố tình truy cập lại form login này, thì phải chuyển hướng tới trang đăng nhập
if (isset($_SESSION['username'])){
    $_SESSION['success'] = "Bạn đã đăng nhập rồi, không thể truy cập lại form_login";
    header("Location: login_success.php");
    exit();
}
$error = '';
$result = '';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    if (empty($name) || empty($password)){
        $error = "Không được để trống username hoặc password";
    }
    elseif ($name != 'admin' && $password != 123456){
        $error = "Username || password sai";
    }
    else{
        //TH đăng nhập đúng username && password
        // chuyển hướng người dùng sang trang mới login_success.php và kèm thông báo đăng nhập thành công tại màn hình đó
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Đăng nhập thành công";
        //dùng hàm header để chuyển hướng
        header('Location: login_success.php');
        // exit để tránh TH không chuyển hướng được trong 1 vài trường hợp
        exit();
    }
}
?>

<h3 style="color: #2E64FE">
    <?php echo $error; ?>
    <?php
    //hiện thị 1 lần duy nhất
    if (isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</h3>

<h3 style="color:green">
    <?php echo $result; ?>

</h3>
<h3 style="color: #1d4b8f">
    <?php
    if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
</h3>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style type="text/css">
        form{
            margin:0px 50px;
            padding: 30px;
            border: 1px solid black;
            background: #2EFEF7;
        }


    </style>
</head>
<body>
<form>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="name" value="" class="form-control">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" value="" class="form-control">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" name="checkbox[]" value="1" class="form-check-input">
        <label class="form-check-label">Remember me</label>
    </div>
    <input type="submit" name="submit" value="LOGIN" class="btn btn-success">
</form>
</body>
</html>
