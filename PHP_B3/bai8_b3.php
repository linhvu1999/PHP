<?php
//$mang_ban_dau =  $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
//$mang_tam = array_map('strlen', $mang_ban_dau);
////sử dụng hàm max() và hàm min() để tìm chuỗi có độ dài dài/ngắn nhất
//echo "Độ dài ngan nhat la: " . min($mang_tam) .
//    ". <br>Độ dài dai nhat  la: " . max($mang_tam).'.';
//?>
<!--chưa-->
<?php
  $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
//chuỗi có độ dài max
$max = 0;
$str_max = "";
foreach ($array as $string){
    $str_length = strlen($string);
    if ($str_length > 0){
        $max = $str_length;
        $str_max = $string;
    }
}
echo "Chuỗi lớn nhất là $str_max, độ dài: $str_length";
?>