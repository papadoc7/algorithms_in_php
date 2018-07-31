<?php

//demo array for testing
$a = array(1, 2, 3);

$cnt = count($a);
$swps = 0;
$sorted = false;

for($i=0;$i<$cnt;$i++)
{
    $sorted=true;
    for($j=0;$j<$cnt-1;$j++)
    {
        // Swap adjacent elements if they are in decreasing\nrder
        if ($a[$j] > $a[$j + 1]) {
            swap($a[$j], $a[$j + 1]);
            $swps++;

            $sorted=false;
        }
    }
    if($sorted)
        break;
}
echo "Array is sorted in ".$swps." swaps.\nFirst Element: ".$a[0]."\nLast Element: ".$a[$cnt-1];

function swap(&$x,&$y) {
    $tmp=$x;
    $x=$y;
    $y=$tmp;
}

//georgiosp
?>
