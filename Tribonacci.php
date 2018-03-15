<?php

function tribonacci($signature, $n) {
  
  if($n<=3) return array_slice($signature, 0, $n);
  
  for($i = 3; $i < $n; $i++){
    $signature[$i] = $signature[$i-1] + $signature[$i-2] + $signature[$i-3];
  }
  
  return $signature;
}
