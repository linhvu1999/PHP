<?php
    $keys = array(
        'field1' => 'first',
        'field2' => 'second',
        'field3' => 'third'
    );

    $values = array(
        'field1value' => 'dinosaur',
        'field2value' => 'pig',
        'field2=3value' => 'platypus'
    );
    function ham_hop_mang ($keys, $values){
        $temp = array();
        $temp[] = $keys;
        if(is_scalar($values)){
            $temp[] = $values;
        }
        else{
            foreach ($values AS $k => $v){
                $temp[] = $v;
            }
        }
        return $temp;
    }
    echo '<pre>'; print_r(array_map('ham_hop_mang',$keys,$values));
 ?>

<?php
function ham_xu_ly($value,$key)
{
    echo "$key : $value"."<br>";
}
$a = '{"Truong": "Dai Hoc Bon Ba",  
		"Khoa": "Tieng Lao nang cao",  
		"Nganh":  
		{   
		  "Nganh 1": "Ngu Phap tieng Lao",
		  "Nganh 2": "Giao tiep tieng Lao"
		}  
		  }';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"ham_xu_ly");

$arr = [1, 2, 3, 4];
//hàm tính tổng
echo array_sum($arr); //10

$arr_4 = [
    'name' => 'Mạnh',
    'age' => [
        0 => 15,
        1 => 29
    ]
];
echo "<pre>";
print_r($arr_4);
echo "</pre>";

$arr_3 = [
    'name' => 'Mạnh',
    'age' => 19,
    2 => 'abc',
    'is_male' => true
];
echo "<pre>";
print_r($arr_3);
echo "</pre>";
echo "Age = " . $arr_3['age'];
echo "Is male = " . $arr_3['is_male'];
echo "Giá trị của phần tử đang có key = 2 là: " . $arr_3[2];
foreach ($arr_3 AS $key => $value) {
    echo "Ví trí $key hiện tại đạng có giá trị là $value";
    echo "<br />";
}
?>
//chữa
<?php
$keys = array(
    'field1' => 'first',
    'field2' => 'second',
    'field3' => 'third'
);

$values = array(
    'field1value' => 'dinosaur',
    'field2value' => 'pig',
    'field2=3value' => 'platypus'
);

//$keysAndValues = array(
////    "first"=>"dinosaur",
////    "second"=>"pig",
////    "third"=>"platypus"
////);
// chỉ dùng hàm khi số phần tử 2 mảng = nhau
$keysAndValue = array_combine($keys, $values);
echo "<pre>";
print_r($keysAndValue);
echo "</pre>";
?>
