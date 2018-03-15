<?php
/** You are given an array strarr of strings and an integer k. Your task is to return the first longest string consisting of k consecutive strings taken in the array.

  * #Example: longest_consec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"

  * n being the length of the string array, if n = 0 or k > n or k <= 0 return "".
                                                                  
  **/
                                                                      
function longestConsec($strarr, $k) {
  $longest = "";
  $n = count($strarr);
  
  for($i = 0; $i < $n - $k + 1; $i++){
    $check = "";
    
    for($j = $i; ($j-$i) < $k; $j++){
      $check .= $strarr[$j];
    }
    
    if(strlen($check) > strlen($longest)){
      $longest = $check;
    }
  }
  return $longest;
}
