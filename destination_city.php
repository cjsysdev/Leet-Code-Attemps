<?php

function destCity($paths)
{
    $size = count($paths);

    for ($i = 0; $i < $size; $i++) {
        $candidate = $paths[$i][1];
        $good = true;
        for ($j = 0; $j < $size; $j++) {
            if ($candidate ===  $paths[$j][0]) {
                $good = false;
                break;
            }
        }

        if ($good) {
            return $candidate;
        }
    }

    return "";
}

$city = [
    ["B", "C"],
    ["D", "B"],
    ["C", "A"]
];

var_dump(destCity($city));
