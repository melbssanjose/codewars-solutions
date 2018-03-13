/**
 *
 * You are given a string of numbers between 0-9. Find the average of these numbers and return it as a floored whole number (ie: no decimal places) written out as a string. Eg:
 * "zero nine five two" -> "four"
 * If the string is empty or includes a number greater than 9, return "n/a"
 *
 **/

function average_string(string $s): string {
  if($s == "") return "n/a";
  
  $numbers = ["one" => 1,
              "two" => 2,
              "three" => 3,
              "four" => 4,
              "five" => 5,
              "six" => 6,
              "seven" => 7,
              "eight" => 8,
              "nine" => 9,
              "zero" => 0];
  $sum = 0;
  $arr = explode(" ", $s);
  
  foreach($arr as $num){
    if(array_key_exists($num, $numbers)){
      $sum += $numbers[$num];
    }
    else return "n/a";
  }
  
  $ave = floor($sum/count($arr));
  
  return array_search($ave, $numbers);
 
}
