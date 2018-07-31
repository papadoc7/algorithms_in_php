<?php

$str = "";

for($a0 = 0; $a0 < $p; $a0++){
    fscanf($handle,"%d",$n);
    if($str != "")
        $str .= "\n";
    $str .= isprime($n);
}
echo $str;

function isprime($n)
{
    if($n == 1)
        return "Not prime";
    if($n == 2)
        return "Prime";

    $sqrt = sqrt($n);
    for($i=2; $i<=$sqrt; $i++)
    {
        if($n % $i == 0)
            return "Not prime";
    }
    return "Prime";
}

//georgiosp
 ?>
