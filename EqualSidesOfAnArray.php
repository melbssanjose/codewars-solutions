/** 
 * You are going to be given an array of integers. Your job is to take that array and find an index N where the sum of the integers to the left of N is equal to the sum of the integers to the right of N. If there is no index that would make this happen, return -1.
 */
<?php

function find_even_index($arr){
  $count = count($arr);
  for($i=0;$i<$count;$i++){
    $left = array_sum(array_slice($arr, 0, $i));
    $right = array_sum(array_slice($arr, $i+1, $count-$i));
    
    if($left==$right) return $i;
  
  }
  return -1;
}
