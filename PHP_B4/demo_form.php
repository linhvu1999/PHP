
<?php
//xu ly lay dl tu form
//luu chi khi co hanh dong submit form thi cac $_POST || $_GET moi dc sinh ra
//    sd ham isset() de check xem 1 bien da toan tai chua
$error = '';
$result = 'Thong tin vua nhap:';

if (isset($_POST['submit'])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    //lay ra thong tin form
    $username = $_POST['username'];
    $password = $_POST['password'];
    //xu ly validate form
    //yeu cau : username, password bat buoc nhap
    //2. password co do dai toi thieu la 3
    if (empty($username) || empty($password)){
        $error = 'Username or password khong duoc de trong';
    }
    else if (strlen($password)<3){
        $error = 'password khong duoc nho hon 3 k.tu';
    }
    else{
        //username = admin, password = 'admin'thong bao dang nhap thanh cong
        //neu ko bao sai mat khau
        if ($username=='admin' && $password == 'admin'){
            $result = "Dang  nhap thanh cong";
        }
        else{
            $error = "Sai mat khau";
        }
    }
}
?>
<h3 style="color:black">
    <?php echo $error; ?>
</h3>
<h3 style="color: red">
    <?php echo $result; ?>
</h3>
<form action="" method="post" >
    Username:
<!--    khi submit form doi lai dl cho cac input ma user nhap dung-->
    <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username']:"" ?>" />
    <br>
    Password:
    <input type="password" name="password" value="" >
    <br>
    <input type="submit" value="submit" name="submit"/>
</form>
