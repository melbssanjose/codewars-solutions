<?php
function orderWeight($str) {
  $nums = explode(" ", $str);
  
   uasort($nums, 'cmp');
  
  return implode(' ', $nums);
}

function cmp($a, $b){
  $sumA = digitSum($a);
  $sumB = digitSum($b);
  
  if($sumA == $sumB) return strcmp($a, $b);
  
  return $sumA > $sumB ? 1 : -1;
}

function digitSum($a){
  $sum = 0;
  while($a>0){
    $sum += $a%10;
    $a/=10;
  }
  return $sum;
}
