<?php

function countBits($n) 
{
  $count = 0;
  while($n>=1){
    $count += $n & 1;
    $n >>= 1;
  }
  return $count;
}
