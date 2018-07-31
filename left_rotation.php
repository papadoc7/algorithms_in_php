<?php

//demo arrays for testing
$a = array(1,2,3,4,5);
$b = array();
$n = count($a);
$k = 4;   //rotates

for($i=0;$i<$n;$i++)
{
    $point = $n-$k+$i;
    if($point >= $n)
      $b[$point-$n] = $a[$i];
    else
      $b[$n-$k+$i] = $a[$i];
}
print_r($b);


/*
function leftRotation($a,$d)
{
	//sample input --> 12345 ,4 step
	//output --> 51234
	array_push($a, array_shift($a));	//timeout :(

	//alternative way
	$tmp = $a[$i];
	unset($a[$i]);
	array_push($a,$tmp);
}
*/

//georgiosp
?>
