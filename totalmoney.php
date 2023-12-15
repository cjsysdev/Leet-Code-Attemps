<?php

function recursion($n)
{
    global $count;

    if ($n == 0) {
        return 0;
    }

    $count++;

    if ($count == 7) {
        $x = 2;
    }

    echo $n . " ";
    return $n + recursion($n - 1);
}

function totalmoney($n)
{
    $x = $y = 0;
    $arr = [];

    while ($x != $n) {
        if ($y == 7) {
            $y = 1;
        }
        $y++;
        $x++;
        $arr[] = $y;
        echo $y . " ";
    }

    // return $y;
}

// echo (totalmoney(14));
echo recursion(10);
