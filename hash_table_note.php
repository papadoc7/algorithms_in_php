<?php

//demo strings for testing
$m="give me one grand today night give d";
$n="give one grand today give d";

//or getting more data from file
$arr=array();
$_fp = fopen("c:\\...\\hashtable_input.txt", "r");
while( $line = fgets( $_fp ) )
{
  array_push($arr,$line);
}
$m=$arr[0];
$n=$arr[1];

$magazine = explode(" ",trim($m));
$ransom = explode(" ",trim($n));

$found=0;

$arrMag=array();
foreach($magazine as $key=>$value)
{
    if(array_key_exists($value,$arrMag))
        $arrMag[$value]=$arrMag[$value]+1;
    else
        $arrMag[$value]=1;
}

foreach($ransom as $key=>$value)
{
    if(array_key_exists($value,$arrMag) && $arrMag[$value]>0)
    {
        $found++;
        $arrMag[$value]--;
    }
}

if(count($ransom) == $found)
    printf("Yes");
else
    printf("No");

//georgiosp
 ?>
