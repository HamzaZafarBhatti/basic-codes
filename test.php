<?php
// function print_array($size) {
//     $arr1 = array();
//     for($i = 0; $i < $size; $i++) {
//         $arr2 = array();
//         for($j = 0; $j < $size - 1; $j++) {
//             if($i == $j || ($j == $size - 2 && $i == $size - 1)) {
//                 array_push($arr2, 'XXX');
//             } else {
//                 array_push($arr2, 'Y');
//             }
//         }
//         array_push($arr1, $arr2);
//     }
//     echo json_encode($arr1, JSON_PRETTY_PRINT);
// }
// print_array(5);

// $fun = function() {
//     return 1;
// };

// echo get_class($fun);

// $a = 1;
// ++$a;
// $a *= $a;
// echo $a--;

// function changeValue($y) {
//     $y = $y + 5;
// }
// $my = 8;
// changeValue($my);
// echo $my;

// $w = 'hello';

// echo $w . ', world!';

class foo
{
    protected $_val;
    public function __construct()
    {
        $this->_val = 1;
    }

    public function getSome()
    {
        return $this->_val * 5;
    }
}

echo foo::getSome();
?>