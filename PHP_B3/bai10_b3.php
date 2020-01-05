
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
$mang_ban_dau = $arrs = ['1','b','c','d'];
//$mang_ban_dau = $arrs = ['a', 0, null, false];
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
