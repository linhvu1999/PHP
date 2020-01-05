<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            width: 700px;
        }
        .form-row, .massenge, .btn, .p {
            margin: 20px;
        }
        .kq{
            margin: 30px;
        }
    </style>
</head>
<body>
<form acyiom="process.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="name">Name*</label>
            <input type="text" name="fullname" value="" placeholder="Nguyen Viet Manh"></p>
        </div>
        <div class="form-group col-md-4">
            <label for="email">Email*</label>
            <input type="text" name="email" value="" placeholder="nguyenvietmanhit@gmail.com"></p>
        </div>
        <div class="form-group col-md-4">
            <label for="phone">Phone*</label>
            <input type="text" name="phone" value='' placeholder="0987xxxxx"></p>
        </div>

    </div>
    <div class='massenge'>
        <label for="exampleFormControlTextarea1">Message*</label><br>
        <textarea cols="30" rows="7" name="message" value="" placeholder="This is a message " ></textarea></p>
    </div>
    <button type="submit" class="btn btn-warning">Send massenge</button>
    <div class='p'>
        <p>* These fields are required </p>
    </div>
</form>
<div class='kq'>
    <p>Họ tên :<?php if(isset($_POST["fullname"])) {echo $_POST["fullname"]; } ?></p>
    <p>Email :<?php if(isset($_POST["email"])) {echo $_POST["email"]; } ?></p>
    <p>Tin nhắn : <?php if(isset($_POST["message"])) {echo $_POST["message"] ;} ?></p>
</div>
</body>
</html>
