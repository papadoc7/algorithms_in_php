<?php

//find how many workers we need, we now have one
//demo array for testing
$arr1 = array([1623,1700],[1500,1520],[1800,1830]);
$arr2 = array([1510,1522],[1823,1900]);
usort($arr1, 'sort_by_order');
$cnt = 0;
$i=$j=0;

while($i<count($arr1) && $j<count($arr2)) {
  $start = max($arr1[$i][0],$arr2[$j][0]);
  $end = min($arr1[$i][1],$arr2[$j][1]);

  if($end - $start > 0){
      $cnt++;
      $i++;
  }
  else if($arr1[$i][0] < $arr2[$j][1])
    $i++;
  else {
    $j++;
  }
}

echo "workers needed: ".$cnt;

function sort_by_order ($a, $b)
{
    return $a[0] - $b[0];
}

//georgiosp
?>
