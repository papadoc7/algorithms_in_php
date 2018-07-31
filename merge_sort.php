<?php

//demo array for testing
$array = array(2, 1, 3, 1, 2);  //1 2 3 1 2 ->
$cnt=0;

$newArray = array();
mergesort($array, $newArray, 0, count($array)-1);

function mergesort($array, $temp, $leftStart, $rightEnd) {
  if($leftStart >= $rightEnd)
    return;
  $middle = floor(($leftStart+$rightEnd) / 2);
  mergesort($array, $temp, $leftStart, $middle);
  mergesort($array, $temp, $middle+1, $rightEnd);
  mergeHalves($array, $temp, $leftStart, $rightEnd);
}

function mergeHalves($array, &$temp, $leftStart, $rightEnd) {
  $leftEnd =  floor(($rightEnd + $leftStart) / 2);
  $rightStart = $leftEnd + 1;
  $size = $rightEnd - $leftStart + 1;

  $left  = $leftStart;
  $right = $rightStart;
  $index = $leftStart;

  while($left <= $leftEnd && $right <= $rightEnd) {
    if($array[$left] <= $array[$right]){
      $temp[$index] = $array[$left];
      $left++;
    }
    else{
      $temp[$index] = $array[$right];
      $right++;
    }
    $index++;
  }
}

//georgiosp
?>
