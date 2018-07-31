<?php

//demo array for testing
$array = array(2, 3, 1, 5, 4);

quicksort($array, 0, count($array) - 1);

function quicksort($array, $left, $right) {
  if($left >= $right)
    return;
  $pivot = $array[($left + $right) / 2];
  $index = partition($array, $left, $right,$pivot);
  quicksort($array, $left, $index - 1);
  quicksort($array, $index, $right);

  var_dump($array);
}

function partition(&$array, $left, $right, $pivot) {
  while($left <= $right) {
    while($array[$left] < $pivot) {
      $left++;
    }

    while($array[$right] > $pivot) {
      $right--;
    }

    if($left <= $right){
      swap($array[$left], $array[$right]);
      $left++;
      $right--;
    }
  }
  return $left;
}

function swap(&$x,&$y) {
    $tmp=$x;
    $x=$y;
    $y=$tmp;
}

//georgiosp
?>
