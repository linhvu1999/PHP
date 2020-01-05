<?php
    $number = [78,60,62,68,71,68,73,85,66,64,
        76,63,75,76,73,68,62,73,72,65,
        74,62,62,65,64,68,73,75,79,73];
    $GTTB = (array_sum($number)/count($number));
    echo "Gía trị trung bình:". $GTTB;
    echo "<br>";
    echo "Các số nhỏ hơn giá trị trung bình:";
    $number = array_unique($number);
    foreach ($number as $value){
        if ($value < $GTTB){
            echo $value.",";
        }
    }
    echo "<br>";

    echo "Các số lớn hơn giá trị trung bình:";
    $number = array_unique($number);
    foreach ($number as $value){
        if ($value > $GTTB){
            echo $value.",";
        }
    }
    echo "<br>";
?>

