<?php
    if (isset($_GET['submit'])){
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
        //xu ly vs input radio || checkbox thi kt them dk da tich vao
        if (isset($_GET['gender'])){

        }
        if (isset($_GET['jobs'])){
            //checkbox xu ly vs mang

        }
    }
?>

<form action="" method="get">
    Name:
    <input type="text" name="name" value=""/>
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="1">Nam<br>
    <input type="radio" name="gender" value="2">Nu<br>
    <input type="radio" name="gender" value="3">Khac<br>
    Country:
    <select name="country">
        <option value="1">Viet Nam</option>
        <option value="2">Nhat Ban</option>
        <option value="3">My</option>
    </select>
    <br>
    Jobs:
    <br>
<!--    cac input co phep con nhieu gia tri dung name[]-->
    <input type="checkbox" name="Jobs[]" value="1">Developer
    <input type="checkbox" name="Jobs[]" value="2">Student
    <input type="checkbox" name="Jobs[]" value="3">BA
    <br>
    Info:
    <textarea name="info"></textarea>
    <br>
    <input type="submit" name="submit" value="login">
</form>
<!--co the co hoac ko-->
<style type="text/css">
    textarea{
        resize: none;
    }
</style>