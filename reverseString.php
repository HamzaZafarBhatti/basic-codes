<?php
$string = 'abcde';
$reverse = '';
$i = 0;
while (!empty($string[$i])) {
    $reverse = $string[$i] . $reverse;
    $i++;
}
echo $reverse;
