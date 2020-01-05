<?php
    $a = array(
        'a' => array(
            'b' =>0,
            'c' => 1
        ),
        'b' => array(
            'e' =>2,
            'o' => array(
                'b' =>3
            )
        )
    );
    echo $a['b']['o']['b'];
    echo "<br/>";
    echo $a['a']['c'];
    echo "<br/>";
    print_r($a['a']);
?>