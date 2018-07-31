<?php

$expenditure = array(2,3,4,2,3,6,8,4,5);
$d = 5;
$n = 9;

function activityNotifications($expenditure, $d, $n) {
    $nots = 0;
    $median = 0;

    for($i=$d;$i<$n;$i++)
    {
        $mArr = array();
        for($j=$i-$d;$j<$i;$j++)
        {
            array_push($mArr,$expenditure[$j]);
        }
        
        $ia=1;
        while($ia<5)
        {
            if ($mArr[$ia] < $mArr[$ia-1])
              swap($mArr[$ia],$mArr[$ia-1]);

            $ia++;
        }

        $median = calculate_median($mArr,$d);
        if($expenditure[$i] >= 2*$median)
            $nots++;
    }
    return $nots;
}

function swap(&$x,&$y) {
    $tmp=$x;
    $x=$y;
    $y=$tmp;
}

function calculate_median($arr, $count) {
    $middleval = floor(($count-1)/2);       // find the middle value, or the lowest middle value
    if($count % 2) {                        // odd number, middle is the median
        $median = $arr[$middleval];
    } else {                                // even number, calculate avg of 2 medians
        $low = $arr[$middleval];
        $high = $arr[$middleval+1];
        $median = (($low+$high)/2);
    }
    return $median;
}

//georgiosp
 ?>
