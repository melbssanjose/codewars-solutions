//A Narcissistic Number is a number which is the sum of its own digits, each raised to the power of the number of digits.

function narcissistic(int $value): bool {

  $valueString = (string)$value;
  $len = strlen($valueString);
  
  $valueString = str_split($valueString);
  
  $sum = 0;
  foreach($valueString as $v){
    $sum += pow($v, $len);
    
    if($sum > $value) return false;
  }
    return $sum == $value;
}
