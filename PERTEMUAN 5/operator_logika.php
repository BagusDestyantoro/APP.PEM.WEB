<?php

$a = true;
$b = false;

//variabel $c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c);
echo "<hr>"; 

//var $c true
$c = $a || $b;
printf("%b || %b = %b", $a,$b,$c);
echo "<hr>";

//var $c akan bernilai false
$c = !$a;
printf("!%b=$b", $a,$c);
echo "<hr>";
?>