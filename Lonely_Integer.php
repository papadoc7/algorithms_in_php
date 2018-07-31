<?php

//example array for testing
$a = array(4, 9, 95, 93, 57, 4, 57, 93, 9);
$inArr = array();

foreach($a as $val)
{
    if(array_key_exists($val, $inArr))
        $inArr[$val] = 2;
    else
    {
        $inArr[$val] = 1;
    }
}

foreach($inArr as $key=>$val)
{
    if($val == 1)
      echo $key;
}

//georgiosp
 ?>
