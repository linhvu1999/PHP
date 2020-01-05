<!--chữa bài 1-->

<?php
    function calculate($arrs,$operator){

        $string = '';


            switch ($operator){
                case "+":
                    $result = 0;
                    $string = "Tổng các phần tử = ";
                    foreach ($arrs  as $key => $value) {
                        $result += $value;
                        $string .= "$value + ";
                    }
//                    //gọi hàm cắt chuỗi để loại bỏ + cuối
//                    $string = substr($string, 0, -2);
//                    $string .= " = $result";
                    break;
                case "-":
                    $result = $arrs[0];
                    $string = "Hiệu các phần tử = ";
                    foreach ($arrs as $key => $value){
                        $string .= "$value + ";
                        if ($key ==0){
                            continue;
                        }
                        $result -= $value;
                    }
//                    $string .= substr($string, 0, -2);
//                    $string .= " = $result";
                    break;
                case "*":
                    $result = 1;
                    $string = "Tích các phần tử = ";
                    foreach ($arrs as $key => $value){
                        $result *= $value;
                        $string .= " $value * ";
                    }
//                    $string .= substr($string, 0, -2);
//                    $string .= " = $result";
                    break;
                case "/":
                    $result = $arrs[0];
                    $string = "Thương các phần tử = ";
                    foreach ($arrs as $key => $value){
                        //                        nếu có gt = 0 thì bỏ qua, ko thực hiện phép chia
                        if ($value==0){
                            continue;
                        }
                        $string .= "$value / ";
                        if ($key == 0){
                            continue;
                        }

                        $result /= $value;
                    }
//                    $string .= substr($string, 0, -2);
//                    $string .= " = $result";
                    break;
            }
        $string .= substr($string, 0, -2);
        $string .= " = $result";
        $string .="<br/>";
        return $string;
    }
$arrs = [0,2, 5, 6, 9, 2, 5, 6, 12 ,5];
    //gọi hàm
    echo calculate($arrs, '+');
    echo calculate($arrs, '-');
    echo calculate($arrs, '*');
    echo calculate($arrs, '/');


?>

