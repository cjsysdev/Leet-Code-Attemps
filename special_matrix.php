<?php

function numSpecial($mat)
{
    $col_sum = [];
    $row_sum = [];

    $row_index = 0;
    foreach ($mat as $row) {
        $col_index = 0;
        foreach ($row as  $value) {
            if (!isset($row_sum[$row_index])) {
                $row_sum[$row_index] = 0;
            } else {
                $row_sum[$row_index] += $value;
                $row_index++;
            }

            if (!isset($col_sum[$col_index])) {
                $col_sum[$col_index] = 0;
            } else {
                $col_sum[$col_index] += $value;
                $col_index++;
            }
        }
    }

    $count = 0;

    foreach ($col_sum as $sum) {
        if ($sum === 1) {
            $count++;
        }
    }

    return $count;
}

function numSpecial_ans($mat)
{
    $$ans = 0;
    $m = count($mat);
    $n = count($mat[0]);

    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $n; $col++) {
            if ($mat[$row][$col] == 0) {
                continue;
            }

            $good = true;
            for ($r = 0; $r < $m; $r++) {
                if ($r != $row && $mat[$r][$col] == 1) {
                    $good = false;
                    break;
                }
            }

            for ($c = 0; $c < $n; $c++) {
                if ($c != $col && $mat[$row][$c] == 1) {
                    $good = false;
                    break;
                }
            }

            if ($good) {
                $$ans++;
            }
        }
    }

    return $$ans;
}

function numspecial_sum($mat)
{
    $m = count($mat);
    $n = count($mat[0]);
    $col_sum = [];
    $row_sum = [];

    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $n; $col++) {
            if ($mat[$row][$col] == 1) {
                @$row_sum[$row]++;
                @$col_sum[$col]++;
            }
        }
    }

    $ans = 0;
    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $n; $col++) {
            if ($mat[$row][$col] == 1) {
                if ($row_sum[$row] == 1 && $col_sum[$col] == 1) {
                    $ans++;
                }
            }
        }
    }

    return $ans;
}

$mat = [
    [1, 0, 0],
    [0, 1, 0],
    [0, 0, 1]
];

var_dump(numspecial_sum($mat));
