<?php

$arr=array();

//example expression for testing
$expression = "{{}(";

$arr = str_split(trim($expression));

echo find_balance($arr)."<br>";

function find_balance($exp)
{
  $tmp = array();

  foreach($exp as $val)
  {
    if($val == "{")
      array_push($tmp,"}");
    else if($val == "[")
      array_push($tmp,"]");
    else if($val == "(")
      array_push($tmp,")");
    else {
      $cnt=count($tmp);
      if($cnt==0 || $val != $tmp[$cnt-1])
        return "No";
      array_pop($tmp);
    }
  }
  
  if(count($tmp)==0)
    return "Yes";
  else
    return "NO";
}

//georgiosp
?>
