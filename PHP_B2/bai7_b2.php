<?php
$n =2;
    for ( $x=1 ; $x <= $n ; $x++){
        for ($y = 1 ; $y <= $x ; $y++){
            echo "*";
            if ($y < $x){
                echo " ";
            }
        }
        echo "<br>";
    }
    echo "<br>";
?>
<?php
    $a=5;
    for ( $x=1 ; $x <= $a ; $x++){
        for ($y = 1 ; $y <= $x ; $y++){
            echo "*";
            if ($y < $x){
                echo " ";
            }
        }
        echo "<br>";
    }
?>