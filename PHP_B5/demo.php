<?php
    $error = '';
    $result = '';
    if (isset($_POST['submit'])){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        //khi thao tac vs file dung $file
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        //check validate
        $name = $_POST['name'];
        if (empty($name)){
            $error = "Name khong de trong";
        }
        else{
            $avatar_arr = $_FILES['avatar'];
            if ($avatar_arr['error']!=0){
                $error = "Khong the upload";
            }
            else{
                //check validate voi truong file upload phai co dinh dang anh va dung luong upload ko vuot qua 2mb
                //lay ra duoi file sd ham pathinfo trong php
                $extension = pathinfo($avatar_arr['name'], PATHINFO_EXTENSION);
//            print_r$extension);
//            die;
                $size = $avatar_arr['size']/1024/1024;
                //can chuyen don vi tu B->mb
                //tao 1 mang quy dinh cac dinh dang file anh
                $arr_extension = ['png','jpg','jpeg','gif'];
                if (in_array($extension, $arr_extension)==FALSE){
                    $error = "Can upload file dang anh";
                }
                else if($size > 2){
                    $error = "Chi co the upload file <=2 MB";
                }
                else{
                    //tao 1 thu muc save file vua upload
                    //phai dung duong dan vat ly
                    $dir_upload = __DIR__. "/upload";
                    print_r($dir_upload);
                    //kiem tra neu chua toan tai thu muc upload thu tao moi
                    if (file_exists($dir_upload)==FALSE){
                        mkdir($dir_upload);
                    }

                    //truyen file tu thu muc tam sang thu muc upload
                    $file_name = time(). $avatar_arr['name'];
                    $tmp_name = $avatar_arr['tmp_name'];
                    $is_upload=$destination = $dir_upload . '/' . $file_name;
                    move_uploaded_file($tmp_name,$destination);
                    if ($is_upload) {
                        $result = "Upload file thanh cong";
                    }
                    else{
                        $error = "Upload file that bai";
                    }
                }

            }

            //xu ly file
            //xu ly upload file len thu muc
            //move_uploaded_file()
            $avatar_arr = $_FILES['avatar'];
            if ($avatar_arr['error'] !=0){
                $error = "Khong the upload file vi loi gi do";
            }
            else{
                //tao 1 thu muc save file vua upload
                //phai dung duong dan vat ly
                $dir_upload = __DIR__. "/upload";
                print_r($dir_upload);
                //kiem tra neu chua toan tai thu muc upload thu tao moi
                if (file_exists($dir_upload)==FALSE){
                    mkdir($dir_upload);
                }
                //truyen file tu thu muc tam sang thu muc upload
                $file_name = time(). $avatar_arr['name'];
                $tmp_name = $avatar_arr['tmp_name'];
                $is_upload=$destination = $dir_upload . '/' . $file_name;
                move_uploaded_file($tmp_name,$destination);
                if ($is_upload) {
                    $result = "Upload file thanh cong";
                }
                else{
                    $error = "Upload file that bai";
                }
            }
        }
    }
?>
<h4 style="color: #0000bf">
    <?php echo $error ?>
</h4>
<h4 style="color: #003f54">
    <?php echo $result ?>
</h4>
<!--khi file co input file, bat buoc phai co thuoc tinh enctype method cua form-->
<form action="" method="post" enctype="multipart/form-data">
    Name: <input type="text" name="name" value=""/>
    <br>
    Upload avatar
    <input type="file" name="avatar" />
    <br>
    <input type="submit" name="submit" value="Submit" />
</form>