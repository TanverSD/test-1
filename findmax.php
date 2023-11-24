<?php

function findMax() {
    $args = func_get_args();

    if (empty($args)) {
        
        return null;
    }

    $maxNumber = $args[0]; 

    foreach ($args as $num) {
        if ($num > $maxNumber) {
            $maxNumber = $num;
        }
    }

    return $maxNumber;
}

// Example usage:
$result = findMax(14, 37, 40, 58, 45);
echo $result; 
echo "<br>";

$result = findMax(10, 30, 5);
echo $result; 
echo "<br>";

$result = findMax(-43, -55, -77);
echo $result; 
echo "<br>";

$result = findMax();  
echo $result;  
?>
