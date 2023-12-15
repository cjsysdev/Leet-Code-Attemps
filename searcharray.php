<?php

function findSpecialInteger($arr)
{
    $map = [];
    $more = floor(count($arr) * 0.25);

    foreach ($arr as $num) {
        if (!isset($map[$num])) {
            $map[$num] = 1;
        } else {
            $map[$num]++;
        }
    }

    foreach ($map as $key => $num) {
        if ($num >= $more) {
            // return $key;
        }
    }

    var_dump($more);
}

var_dump(
    findSpecialInteger(
        [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 12, 12, 12]
    )
);

// function countRepeatingNumbers($array)
// {
//     $count = [];

//     foreach ($array as $number) {
//         if (!isset($count[$number])) {
//             $count[$number] = 1;
//         } else {
//             $count[$number]++;
//         }
//     }

//     foreach ($count as $number => $occurrences) {
//         // echo "Number $number appears $occurrences time(s) in the array.\n";
//     }

//     var_dump($count);
// }

// $array = [1, 2, 2, 6, 6, 6, 6, 7, 10];
// countRepeatingNumbers($array);
