
<?php
function ham_chuyen_doi_kieu($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = ham_chuyen_doi_kieu($value, $case);
continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
//$mang_ban_dau = ['1','B','C','E'];
$mang_ban_dau = $arrs = ['a', 0, null, false];
echo "<pre>";
echo 'Mảng ban đầu: <br>';
print_r($mang_ban_dau);
echo "</pre>";
echo "<pre>";
echo '<br>Các giá trị ở dạng chữ thường.<br>';
$mang_dang_chu_thuong = ham_chuyen_doi_kieu($mang_ban_dau,CASE_LOWER);
print_r($mang_dang_chu_thuong);
echo "</pre>";
echo "<pre>";
echo '<br>Các giá trị ở dạng chữ hoa.<br>';
$mang_dang_chu_hoa = ham_chuyen_doi_kieu($mang_ban_dau,CASE_UPPER);
print_r($mang_dang_chu_hoa);
echo "</pre>";
?>

<?php
$arrs = ['1','B','C','E'];
function convectArrToLower($arrs){
    $arr_result = [];
    foreach ($arrs as $value){
        $value_lower = strtolower($value);
        $arr_result[] = $value_lower;
    }
    return $arr_result;
}
echo "<pre>";
print_r(convectArrToLower($arrs));
echo "</pre>";
?>
