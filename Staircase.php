<?php

//example array for testing
$arr = array(1,3,7);
$s = count($arr);
$cnt=0;

for($i=0;$i<$s;$i++)
{
    echo getCombinations($arr[$i])."<br>";
}

function getCombinationsSmart($n)
{
  if($n <= 0)
    return 0;
  else if($n == 1)
    return 1;
  else if($n == 2)
    return 2;
  else if($n == 3)
    return 4;

  return getCombinationsSmart($n-1) + getCombinationsSmart($n-2) + getCombinationsSmart($n-3);
}

function getCombinations($stairs, $index = 2, &$a = []) {
    $a[0] = 1;
    $a[1] = 1;
    if ($stairs < 2 || count($a) - 1  == $stairs) {
        return $a[$stairs];
    }
    $availableSteps = [1, 2, 3];
    $combinations = 0;
    foreach($availableSteps as $step) {
        if ($step <= $index) {
            $combinations += $a[$index - $step];
        }
    }
    $a[$index] = $combinations;
    return getCombinations($stairs, $index + 1, $a);
}

function temp($n)
{
  if($n <= 0)
      return 0;
  else if($n == 1)
      return 1;

  $tmp = floor($n/3) * 3;
  return $tmp + ($n%3);
}

function nextStep($n)
{
    if($n == 0)
        return 0;
    else if($n == 1)
        return 1;
    return nextStep($n-1) + nextStep($n-2) + nextStep($n-3);
}

//georgiosp
?>
