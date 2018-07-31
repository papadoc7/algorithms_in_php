<?php

//random input for testing
$n = 1;
$s = array(4);
$d = 4;
$m = 1;
solve($n, $s, $d, $m);

function solve($n, $s, $d, $m) {
    $cnt = 0;
    $sum = array();
    $sum[0] = 0;
    for($i=0;$i<$n;$i++)
        $sum[$i+1] = $sum[$i] + $s[$i];

    for($i=0;$i<=$n-$m;$i++) {
      $tmp1 = $sum[$i+$m];
      $tmp2 = $sum[$i];
        if($sum[$i+$m] - $sum[$i] == $d)
            $cnt++;
    }

    echo $cnt;
}

//georgiosp
?>
