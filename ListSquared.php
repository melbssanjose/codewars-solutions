/* Divisors of 42 are : 1, 2, 3, 6, 7, 14, 21, 42. These divisors squared are: 1, 4, 9, 36, 49, 196, 441, 1764. The sum of the squared divisors is 2500 which is 50 * 50, a square!

 * Given two integers m, n (1 <= m <= n) we want to find all integers between m and n whose sum of squared divisors is itself a square. 42 is such a number.

 * The result will be an array of arrays or of tuples (in C an array of Pair) or a string, each subarray having two elements, first the number whose squared divisors is a square and then the sum of the squared divisors.
 **/
function listSquared($m, $n) {
  $perfectSum = array();
  
  for($i=$m;$i<=$n;$i++){
    $divisors = getDivisors($i);

    $count = count($divisors);
    $sumSquared = getSumSquared($divisors);
    
    if(isPerfectSquare($sumSquared)){
      $perfectSum[] = [$i, $sumSquared];
    }
  }
  return $perfectSum;
}

function getDivisors($n){
  $divisors = array();
  
  for($i=1;$i<=$n;$i++){
    if($n%$i==0) $divisors[] = $i;
  }
  
  return $divisors;
}

function isPerfectSquare($n){
  $root = sqrt($n);
 
  return $root == (int)$root;
}

function getSumSquared(array $n){
    $sum = 0;
    for($i=0;$i<count($n);$i++){
        $sum += $n[$i] * $n[$i];
    }
    return $sum;
}
