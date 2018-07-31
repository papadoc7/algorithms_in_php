<?php

//demo array for testing
$x = array(7, 2, 4, 6, 5, 9, 12, 11);
$k = 2;

sort($x);
$n = count($x);
$i = $Trans = 0;

while($i < $n)
{
  $Trans++;
  $chk =$x[$i] + $k;
  while($i < $n && $x[$i] <= $chk)
  {
    $i++;
  }

  $i--;
  $chk = $x[$i] + $k;
  while($i < $n && $x[$i] <= $chk)
  {
    $i++;
  }
}

echo $Trans;

//georgiosp
?>
