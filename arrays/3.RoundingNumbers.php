<?php
    $stringInput = readline();
    $stringInputArray = explode(" ", $stringInput);
    $stringInputRounded = array();
    // print_r($stringInputArray);
    foreach ($stringInputArray as $value) {
        array_push($stringInputRounded, intval(round($value)));
    }

    for ($i=0; $i < count($stringInputRounded); $i++) {
        $c = number_format(round($stringInputArray[$i], 2), 2);
        print("$c => $stringInputRounded[$i]\r\n");
    }
?>