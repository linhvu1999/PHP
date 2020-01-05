<?php
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];
function ham_hop_mang_theo_index($x, $y)
{
    $temp = array(); $temp[] = $x;
    if(is_scalar($y))
    {
        $temp[] = $y;
    }
    else
    {
        foreach($y as $k => $v)
        {
            $temp[] = $v;
        }
    }
    return $temp;
}
echo "<pre>";
print_r(array_map('ham_hop_mang_theo_index',$array2, $array1));
echo "</pre>";

?>