<?php

function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

$number = 5;
echo "The factorial of $number is " . factorial($number);

?>
