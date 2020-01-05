<?php
//    ham thao tac voi chuoi
$string = "cbacj";
echo strtoupper($string);
//chuyen thanh chu hoa
$string = 'hello';
echo ucfirst($string);
//chuyen k.tu dau tien thanh chu hoa
$string = "my name";
echo ucwords($string);
//xoa cac khoang trang o dau va cuoi chuoi
$string = "      abc  def    ";
echo trim($string);
//tim kiem va thay the
$string = " abc def ";
echo str_replace('abc','linh', $string);
//tim kiem va thay the theo regex
//thay the all cac k.tu nao la so = dau -
$string = "cvv 1233 ghj 12 a";
echo preg_replace("/[0-9]/","-", $string);
echo "<br>";
//cat chuoi
$string = "hello linh";
echo substr($string,0, 3);
echo "<br>";
//ham thao tac voi thoi gian
$datetime = "2020-08-18 13:00:00";
echo date('d-m-Y H:i:s', strtotime($datetime));
echo "<br>";
//lay ra thoi gian hien tai
//set lai mui gio
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo date("d/m/Y H:i:s", time());
echo "<br>";
//thao tac voi so
$price = 1250000;
echo number_format($price,0,'.','.');
?>