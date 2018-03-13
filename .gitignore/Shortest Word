/** Simple, given a string of words, return the length of the shortest word(s).
 * String will never be empty and you do not need to account for different data types.
 */

function findShort($str){
  $words = explode(" ", $str);
  
  $shortest = strlen($words[0]);
  
  foreach($words as $word){
    $len = strlen($word);
    if($len<$shortest){
      $shortest = $len;
    }
  }
  
  return $shortest;
}
