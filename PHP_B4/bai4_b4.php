<?php
    $error = '';
    $result = '';
    if (isset($_POST['submit'])){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $state = $_POST['state'];

        if (empty($_POST['firstname'])){
            $error = "First name không đươc để trống";
        }
        else if (empty($_POST['lastname'])){
            $error = "Last name không được để trống";
        }
        else{
            $result .="Đăng ký thành công !";
            $result .= "Thông tin của bạn";
            $result .= "Firstname: $firstname<br>";
            $result .= "Lastname : $lastname<br>";
            $gender = $_POST['gender'];
            $gender_text = '';
            switch ($gender){
                case 1: $gender_text = 'Male';
                    break;
                case 2: $gender_text = 'Female';
                    break;
            }
            $result .= "Gender: $gender_text";

            $state = $_POST['state'];
            $state_text = '';
            switch ($state){
                case 0: $state = '--Select--'; break;
                case 1: $state = 'A'; break;
                case 2: $state = 'B'; break;
            }
            $result .= "State: $state_text <br>";
        }
    }
?>

<h4 style="color: red">
    <?php echo $error ?>
</h4>
<h4 style="color:blue">
    <?php echo $result ?>
</h4>

<!DOCTYPE HTML>
<html>
<head>
    <title>Bài 4</title>
    <meta name="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post" >
        <div class="row">
            <div class="content-item col-md-9">
                    <div class="form-group">
                        <label>Firstname:</label>
                        <input type="text" name="firstname" value="<?php echo isset($_POST['firstname'])? $_POST['firstname']:''?>" class="form-control" id="firstname">
                    </div>
                    <div class="form-group">
                        <label >Lastname</label>
                        <input type="text" name="lastname" value="<?php echo isset($_POST['lastname'])? $_POST['lastname']:''?>" class="form-control" id="lastname" >
                    </div>
                    <div class="form-check">

                        <?php
                        $check_female = '';
                        $check_male = '';
                        if (isset($_POST['gender'])){
                            switch ($gender){
                                case 1: $check_male = "checked=true";
                                    break;
                                case 2: $check_female = "checked = true";
                                    break;
                            }
                        }
                        ?>
                    <label>Gender </label>
                        <input <?php echo $check_male ?>
                            type="radio" name="gender" value="1" class="form-check-input>Male
                        <input <?php echo $check_female ?>
                            type="radio" name="gender" value="2" class="form-check-input>Female
                    </div>
                    <div class="form-group">
                        <label>State</label>
                        <select class="form-control" name="state">
                            <option value="1">Johor</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
            <div class="content col-md-3">
                <label>Exercise List</label>
                <button type="button" class="btn btn-primary btn-lg btn-block">Home Diretory</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">FORM</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">operator</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">array</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">if-else</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">Repetition</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">string</button>
            </div>
        </div>
    </form>
</body>
</html>
