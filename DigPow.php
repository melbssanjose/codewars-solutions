<?php

function digPow($n, $p) {
  $sum = 0;
  $number = str_split((string)$n);
  
  for($i=0;$i<count($number);$i++){
    $sum += pow($number[$i],$p+$i);
  }
  
  return $sum%$n==0 ? $sum/$n : -1;
}
