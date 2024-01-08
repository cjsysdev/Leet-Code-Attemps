<?php

function binarySearch($needle, $array)
{
  $low = 0;
  $high = count($array) - 1;

  while ($low <= $high) {
    $middle = floor(($low + $high) / 2);

    if ($array[$middle] == $needle) {
      return $middle;
    }

    if ($array[$middle] > $needle) {
      $high = $middle - 1;
    } else {
      $low = $middle + 1;
    }
  }

  return "Not Found";
}

function mybinarysearch($needle, $arr)
{
  $low = 0;
  $high = count($arr) - 1;

  while ($low <= $high) {
    $middle = round(($low + $high) / 2);
    echo ($low . $high . $middle . " = " . $arr[$middle] . " ");

    if ($arr[$middle] == $needle) {
      return $middle;
    }

    if ($arr[$middle] > $needle) {
      $high = $middle - 1;
    } else {
      $low = $middle + 1;
    }
  }

  return null;
}

function find_smallest($arr)
{
  $smallest = $arr[0];
  $smallest_index = 0;

  foreach ($arr as $key => $item) {
    if ($item < $smallest) {
      $smallest = $arr[$key];
      $smallest_index = $key;
    }
  }

  return $smallest_index;
}

function selection_sort($arr)
{
  $new_arr = [];

  foreach ($arr as $key => $item) {
    $smallest = find_smallest($arr);
    $new_arr[] = array_splice($arr, $smallest, 1)[0];
  }

  return $new_arr;
}

function countdown($print)
{
  echo $print;
  if ($print <= 0) {
    return;
  }
  countdown($print - 1);
}

$array = [1,2,4,8,9,10,13];
echo binarySearch(10, $array) . "\n";
// echo binarySearch(30, $array) . "\n";
// echo mybinarysearch(10, $array);
// var_dump(selection_sort($array));
// echo (countdown(10));
