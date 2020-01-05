<?php
echo "<b>";
    $n = 50;
    for ($i = 1; $i <= $n; $i++){
        if ($i < $n){
            echo "$i-";
        }
        else{
            echo "$i"."<br>";
        }
    }
 echo "</b>";
?>