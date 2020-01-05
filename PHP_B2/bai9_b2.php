<table border="2px" cellpadding="3" >
    <?php
        for ($i = 1; $i <=10; $i++){
            echo "<tr style='border: 2px'>";
            for ($j = 1 ; $j<=5 ; $j++){
                echo "<td style='text-align: center;'>$j x $i = ".$i*$j."</td>";
            }
            echo "</tr>";
        }
        ?>

    <?php
    for ($i = 1; $i <=10; $i++){
        echo "<tr style='border: 2px'>";
        for ($j = 6 ; $j<=10 ; $j++){
            echo "<td style='text-align: center;'>$j x $i = ".$i*$j."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>





