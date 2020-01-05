<?php
$x = array( 1, 2, 3, 4, 5);
echo "<pre>";
var_dump($x);
echo "</pre>";
unset($x[3]);
$x = array_values($x);
echo "<pre>";
echo '';
var_dump($x);
echo "</pre>";
?>