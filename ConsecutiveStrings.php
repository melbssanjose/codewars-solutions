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
