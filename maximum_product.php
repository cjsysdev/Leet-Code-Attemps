<?php

function maxProduct($nums)
{
    sort($nums);
    $last_index = count($nums) - 1;

    return (($nums[$last_index - 1] - 1) * ($nums[$last_index] - 1));
}
$arr = [1,5,4,5];
var_dump(maxProduct($arr));
