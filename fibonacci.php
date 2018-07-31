<?php

function fibonacci($n) {
    if($n<=1)
        return $n;
    else
        return fibonacci($n-1)+fibonacci($n-2);
}

$n = 3;

printf("%d", fibonacci($n));
printf("<br>%f", 3.5*3);

//georgiosp
?>
