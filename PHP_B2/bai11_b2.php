<!DOCTYPE HTML>
<html>
    <head>
        <title>Kiểm tra số nguyên tố từ 1-100</title>
    </head>
    <body>
    <table border="1px">
        <?php

        for ($i = 1; $i <=10; $i++){
            for ($j = 1 ; $j<=10 ; $j++)

                echo "<td style='text-align: center;' height=30px width=60px bgcolor=#fff>  ".$i*$j."</td>";
            function isPrime($n){
                if($n<2){
                    return false;
                }
                for (($i*$j)=1 ; ($i*$j) <= sqrt($n) ; ($i*$j)++){
                    if ($n%($i*$j)==0){
                        return false;
                    }
                }
                return true;
            }
                for (($i*$j)=2; ($i*$j)<=100; ($i*$j)++){
                    if (isPrime($sum)){
                        echo "<td style='color: #00bf00'>".$i*$j."</td>";
                    }
                    else{
                        echo "<td style='color: red;'>".$i*$j."</td>";
                    }

                }
            }

            echo "</tr>";





        ?>
    </table>
    </body>
</html>