<?php
echo "<b>";
    $n = 10;
    $tong = 0;
    for ($i = 1; $i <= $n; $i++){

        $tong += 1/$i;
    }
    echo "S(10)= " . $tong;

echo "</b>";

?>