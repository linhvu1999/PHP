<?php
    $array = [12, 5, 10, 125, 60, 90, 345, -123, -125, 0];
    $string = "Các số chia hết cho 5 trong khoảng 100-200 là :";
    foreach ($array as $value){
        if ( $value>=100 && $value<=200&& $value % 5==0){
                $string .= $value;
        }

    }
    echo $string;
    echo "<br>";

?>

<!-- chữa-->
<?php
$array = [12, 5, 10, 125, 60, 90, 345, -123, -125, 0];
foreach ($array as $value){
    if ($value>=100 && $value<=200 && $value%5==0){
        echo $value ." ";
    }
}
?>

