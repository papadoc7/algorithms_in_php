<?php

//demo array for testing
$arr = array(3,3,2,1,3);
equalizeArray($arr);

function equalizeArray($arr) {
    /* 
    example:
    3 3 4 4 5 6 8 9 6 4
    -------------------
    3 3 4 4 4 5 6 6 8 9
    */
    $cnt=count($arr);
    $CntValues = array();
    sort($arr);
    $i=1;
    $myCnt=0;
    $tmpCnt=1;
    
    while(($myCnt <= $cnt/2) && $i<$cnt)
    {
        if($arr[$i] != $arr[$i-1])
        {
            if($myCnt<$tmpCnt)
                $myCnt=$tmpCnt;

            $tmpCnt=1;
        }
        else
            $tmpCnt++;

        $i++;
    }
    echo $myCnt;
}

//georgiosp
 ?>
