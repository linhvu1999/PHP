<?php
    //xu ly form
$error = '';
$result = '';
    if (isset($_POST['submit'])){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        //tao cac bien trung gian luu gt
        $name = $_POST['name'];
        $email = $_POST['email'];
        $date_time = $_POST['date_time'];
        $class_detail  = $_POST['class_detail'];
        $gender = $_POST['gender'];
        //validate
        if (empty($name)){
            $error = "Name khong de trong";
        }
        else if (empty($email)){
            $error = "Email khong de trong";
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "Email chua dung dinh dang";
        }
        else if (empty($class_detail)&& empty($date_time)){
            $error = "Class detail va specific time khong de trong";
        }
        else if (!isset($_POST['gender'])){
            $error = "Can phai chon gender";
        }
        else{
            $result .= "Your given details are as:<br>";
            $result .= "Name: $name<br>";
            $result .= "Email: $email<br>";
            $result .= "Specific Time : $date_time<br>";
            $result .= "Class detail: $class_detail<br>";
            //xu ly radio, checkbox, select box
            $gender = $_POST['gender'];
            $gender_text = '';
            switch ($gender){
                case 0: $gender_text = 'Female';
                break;
                case 1: $gender_text = 'Male';
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
<form action="" method="post">
    <table border="0" >
        <tr>
            <td colspan="2">
                Tutorials...
            </td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>
                <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name']:"" ?>"/>
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email']:"" ?>">
            </td>
        </tr>
        <tr>
            <td>Specific Time:</td>
            <td>
                <input type="date" name="date_time" value="<?php echo isset($_POST['date_time']) ? $_POST['date_time']:"" ?>">
            </td>
        </tr>
        <tr>
            <td>Class details:</td>
            <td>
                <textarea cols="30" rows="3" name="class_detail"><?php echo isset($_POST['class_detail'])? $_POST['class_detail']:'' ?></textarea>
            </td>
        </tr>
        <tr>

            <?php
            $check_female = '';
            $check_male = '';
                if (isset($_POST['gender'])){
                    switch ($gender){
                        case 0: $check_female = "checked=true";
                        break;
                        case 1: $check_male = "checked = true";
                        break;
                    }
                }
            ?>
            <td>Gender</td>
            <td>
                <input <?php echo $check_female ?>
                    type="radio" name="gender" value="0">Female
                <input <?php echo $check_male ?>
                    type="radio" name="gender" value="1">Male
            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <input type="submit" name="submit" value="Show info">
            </td>
        </tr>
    </table>
</form>

