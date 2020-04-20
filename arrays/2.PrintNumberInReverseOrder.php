<?php
    $arrayLength = readline();
    // $arrayLength = 3;
    $arrayInput = array();

    for ($i=0; $i < $arrayLength; $i++) {
        $input = readline();
        array_push($arrayInput, $input);
    }

    $reversedInputArray = array_reverse($arrayInput);
    $arrayValues = array_values($reversedInputArray);
    foreach ($arrayValues as &$value) {
        echo ltrim($value)." ";
    }
?>