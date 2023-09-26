<?php
$numbers = range(1, 10);
function removeEvenNumbers($numbers) {
    $result = array_filter($numbers, function ($number) {
        return $number % 2 != 0; 
    });

    return array_values($result); 
}

$oddNumbers = removeEvenNumbers($numbers);
print_r($oddNumbers);
?>
