<?php


function binary_search($arr, $needle){
    $low = 0;
    $high = count($arr) - 1;

    while($low <= $high){
        $mid = round(($low + $high) / 2);

        if($arr[$mid] === $needle){
            return $mid;
        }
        
        if($arr[$mid] < $needle){
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    return "Not Found";

}

$arr = [1,2,3,4,5];
var_dump(binary_search($arr, 5));