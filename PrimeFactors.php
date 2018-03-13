/**
 * Given a positive number n > 1 find the prime factor decomposition of n. The result will be a string with the following form :

 * "(p1**n1)(p2**n2)...(pk**nk)"
 * with the p(i) in increasing order and n(i) empty if n(i) is 1.

 * Example: n = 86240 should return "(2**5)(5)(7**2)(11)"
 **/
function primeFactors($n) {
  $frequency = array();
  
  $i = 2;
  while($n>1){
    if($n%$i==0){
      if(isset($frequency[$i])){
        $frequency[$i]++;
      }
      
      else $frequency[$i] = 1;
      
      $n /= $i;
      continue;
    }
    
    $i++;
  }
  
  $factors = "";
  
  foreach($frequency as $factor => $exponent){
      if($exponent==1){
        $factors .= "(". $factor . ")";
      }
      else $factors .= "(". $factor . "**". $exponent . ")";
  }
  
  return $factors;
}
