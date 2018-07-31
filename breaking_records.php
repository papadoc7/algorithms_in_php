<?php

//demo array for testing
$score = array(1,2,3,4,5,6,7);

$res=array();
$cnt=count($score);
$LowCnt = $HighCnt = 0;
$maxScore = $minScore = $score[0];

for($i=1;$i<$cnt;$i++)
{
    if($score[$i] > $maxScore)
        $HighCnt++;
    else if($score[$i] < $minScore)
        $LowCnt++;
}
array_push($res,$HighCnt,$LowCnt);
return $res;

//georgiosp
 ?>
