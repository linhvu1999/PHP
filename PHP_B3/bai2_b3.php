<?php
    $arrs = ['đỏ','xanh','cam','trắng'];
    $value1 = $arrs[0];
    $value2 = $arrs[1];
    $value3 = $arrs[2];
    $value4 = $arrs[3];

    $string = "Màu <span class='red'>$value1</span>  là màu yêu thích của Anh, 
                   <span class='red'>$value2</span>  là màu yêu thích của Sơn,
                   <span class='red'>$value3</span> là màu yêu thích của Thắng,
                   còn màu yêu thích của tôi là màu <span class='red'>$value4</span>";
    echo $string;
?>
<style type="text/css">
    .red{
        color: red;
    }
</style>
