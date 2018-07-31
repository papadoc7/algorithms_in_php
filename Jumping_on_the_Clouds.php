<?php

//examples arrays for testing
$c = array(0,0,1,0,0,1,0,0,0,1,0,0,1,0,0,0,1,0,0,1,0,0,0,1,0,0,1,0,0,0,1,0,0,1,0);
$c = array(0,0,0,1,0,0);
$c = array(0,0,1,0,0,1,0);

echo jumpingOnClouds($c);

function jumpingOnClouds($c) {
    $steps = 0;
    $n=count($c);
    $i=0;
    while($i<$n-1)
    {
      $nextStep = $i + 2;
      if($nextStep < $n && $c[$nextStep] == 0)
      {
          $steps++;
          $i+=2;
      }
      else {
        $steps++;
        $i++;
      }
    }

    return $steps;
}

//georgiosp
?>
