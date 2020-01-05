<?php
    $number = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
    echo "Phần tử đầu tiên :";
    echo  reset($number);
    echo "<br>";
    echo "Phần tử cuối cùng : ";
    echo end($number);
    echo "<br>";
    $GTLN = (max($number));
    echo "Gía trị lớn nhất trong mảng: ".$GTLN."<br>";
    $GTNN = (min($number));
    echo "Gía trị nhỏ nhất trong mảng: " .$GTNN."<br>";
    echo "Tổng các phần tử :";
    echo array_sum($number);
    echo "<br>";

    echo "Sắp xếp theo thứ tự tăng dần trong mảng:";
    sort($number);

    $clength = count($number);
    for($x = 0; $x < $clength; $x++) {
        echo $number[$x];
        echo ',';
    }
    echo"<br>";
    echo "Sắp xếp theo thứ tự giảm dần trong mảng: ";
    rsort($number);

    $clength = count($number);
    for($x = 0; $x < $clength; $x++) {
        echo $number[$x];
        echo ',';
    }
    echo"<br>";

    echo "Tăng dần theo key:"."<br>";
    ksort($number);
    foreach ($number as $key => $value){
        echo 'Key =' .$key. ",Gía trị = ".$value;
        echo "<br>";
    }
    echo "<br>";

    echo "Gỉam dần theo key:"."<br>";
    krsort($number);
    foreach ($number as $key => $value){
        echo 'Key =' .$key. ",Gía trị = ".$value;
        echo "<br>";
    }
    echo "<br>";

?>



